<?php

namespace ShipStream\Ups\Authentication;

/**
 * Access token locking implementation that uses a file lock
 */
class FileAccessTokenLock implements AccessTokenLock
{
    protected string $lockFileName;

    /**
     * @var resource|null
     */
    protected $lockFile = null;

    public function __construct(string $filename)
    {
        $this->lockFileName = $filename;
    }

    public function lock(): void
    {
        flock($this->getLockFile(), LOCK_EX);
    }

    public function unlock(): void
    {
        flock($this->getLockFile(), LOCK_UN);
    }

    public function __destruct()
    {
        if ($this->lockFile) {
            fclose($this->lockFile);
        }
    }

    /**
     * @return resource
     */
    protected function getLockFile()
    {
        if ($this->lockFile === null) {
            if (is_file($this->lockFileName)) {
                $this->lockFile = fopen($this->lockFileName, 'w');
            } else {
                $this->lockFile = fopen($this->lockFileName, 'x');
            }
            fwrite($this->lockFile, date('r'));
        }
        return $this->lockFile;
    }
}
