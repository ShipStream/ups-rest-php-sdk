<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryResponseLabelResults extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Package Tracking number.  Package 1Z number. Returned only if TrackingNumber or Combination of Reference Number and Shipper Number present in request.
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * The elements needed to render a label on a printer or in a browser. Specifies the format in which GraphicImage is represented. If LabelImageFormat is GIF, LabelImage contains GraphicImage and HTMLImage. Otherwise, it contains only GraphicImage. If LabelImageFormat is PDF, LabelImage is only returned at the first package result. If entered in the request, the response mirrors, else the default values are returned.  Returned only if TrackingNumber or Combination of Reference Number and Shipper Number present in request.
     *
     * @var LabelResultsLabelImage
     */
    protected $labelImage;
    /**
     * Mail Innovations Tracking Number.  Applicable for Single Mail Innovations Returns and Dual Mail Innovations Returns shipment. Returned only if MailInnovationsTrackingNumber is provided in request.
     *
     * @var string
     */
    protected $mailInnovationsTrackingNumber;
    /**
    * Container to hold Mail Innovations shipments label. The elements needed to render a label on a printer or in a browser. Specifies the format in which GraphicImage is represented. If LabelImageFormat is GIF, LabelImage contains GraphicImage and HTMLImage. Otherwise, it contains only GraphicImage.   Applicable for Single Mail Innovations Returns and Dual Mail Innovations Returns shipment. Returned only if MailInnovationsTrackingNumber is provided in request.
    If LabelImageFormat requested was PDF and TrackingNumber was present along with MailInnovationsTrackingNumber in the request, only LabelImage container is returned. MailInnovationsLabelImage will not be returned. In that case, the labels for Small Package Tracking Number and Mail Innovations Tracking Number will be stitched in single PDF file.
    *
    * @var LabelResultsMailInnovationsLabelImage
    */
    protected $mailInnovationsLabelImage;
    /**
     * Container for the HTML receipt and the receipt link.
     *
     * @var LabelResultsReceipt
     */
    protected $receipt;
    /**
     * Container tag for the International Forms. Currently, represents UPS Premium Care Form for Electronic Returns Label and Electronic Import Control Label. UPS  Premium Care Form for Forward shipment if Subverion is 1903 or greater  Applicable for Electronic Return Label and Electronic Import Control Label shipments only. Applies only for Canada domestic shipments. Returned for request with SubVersion greater than or equal to 1707.  UPS  Premium Care Form for Forward shipment if Subverion is 1903 or greater
     *
     * @var LabelResultsForm
     */
    protected $form;
    /**
     * Package Tracking number.  Package 1Z number. Returned only if TrackingNumber or Combination of Reference Number and Shipper Number present in request.
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * Package Tracking number.  Package 1Z number. Returned only if TrackingNumber or Combination of Reference Number and Shipper Number present in request.
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * The elements needed to render a label on a printer or in a browser. Specifies the format in which GraphicImage is represented. If LabelImageFormat is GIF, LabelImage contains GraphicImage and HTMLImage. Otherwise, it contains only GraphicImage. If LabelImageFormat is PDF, LabelImage is only returned at the first package result. If entered in the request, the response mirrors, else the default values are returned.  Returned only if TrackingNumber or Combination of Reference Number and Shipper Number present in request.
     *
     * @return LabelResultsLabelImage
     */
    public function getLabelImage() : LabelResultsLabelImage
    {
        return $this->labelImage;
    }
    /**
     * The elements needed to render a label on a printer or in a browser. Specifies the format in which GraphicImage is represented. If LabelImageFormat is GIF, LabelImage contains GraphicImage and HTMLImage. Otherwise, it contains only GraphicImage. If LabelImageFormat is PDF, LabelImage is only returned at the first package result. If entered in the request, the response mirrors, else the default values are returned.  Returned only if TrackingNumber or Combination of Reference Number and Shipper Number present in request.
     *
     * @param LabelResultsLabelImage $labelImage
     *
     * @return self
     */
    public function setLabelImage(LabelResultsLabelImage $labelImage) : self
    {
        $this->initialized['labelImage'] = true;
        $this->labelImage = $labelImage;
        return $this;
    }
    /**
     * Mail Innovations Tracking Number.  Applicable for Single Mail Innovations Returns and Dual Mail Innovations Returns shipment. Returned only if MailInnovationsTrackingNumber is provided in request.
     *
     * @return string
     */
    public function getMailInnovationsTrackingNumber() : string
    {
        return $this->mailInnovationsTrackingNumber;
    }
    /**
     * Mail Innovations Tracking Number.  Applicable for Single Mail Innovations Returns and Dual Mail Innovations Returns shipment. Returned only if MailInnovationsTrackingNumber is provided in request.
     *
     * @param string $mailInnovationsTrackingNumber
     *
     * @return self
     */
    public function setMailInnovationsTrackingNumber(string $mailInnovationsTrackingNumber) : self
    {
        $this->initialized['mailInnovationsTrackingNumber'] = true;
        $this->mailInnovationsTrackingNumber = $mailInnovationsTrackingNumber;
        return $this;
    }
    /**
    * Container to hold Mail Innovations shipments label. The elements needed to render a label on a printer or in a browser. Specifies the format in which GraphicImage is represented. If LabelImageFormat is GIF, LabelImage contains GraphicImage and HTMLImage. Otherwise, it contains only GraphicImage.   Applicable for Single Mail Innovations Returns and Dual Mail Innovations Returns shipment. Returned only if MailInnovationsTrackingNumber is provided in request.
    If LabelImageFormat requested was PDF and TrackingNumber was present along with MailInnovationsTrackingNumber in the request, only LabelImage container is returned. MailInnovationsLabelImage will not be returned. In that case, the labels for Small Package Tracking Number and Mail Innovations Tracking Number will be stitched in single PDF file.
    *
    * @return LabelResultsMailInnovationsLabelImage
    */
    public function getMailInnovationsLabelImage() : LabelResultsMailInnovationsLabelImage
    {
        return $this->mailInnovationsLabelImage;
    }
    /**
    * Container to hold Mail Innovations shipments label. The elements needed to render a label on a printer or in a browser. Specifies the format in which GraphicImage is represented. If LabelImageFormat is GIF, LabelImage contains GraphicImage and HTMLImage. Otherwise, it contains only GraphicImage.   Applicable for Single Mail Innovations Returns and Dual Mail Innovations Returns shipment. Returned only if MailInnovationsTrackingNumber is provided in request.
    If LabelImageFormat requested was PDF and TrackingNumber was present along with MailInnovationsTrackingNumber in the request, only LabelImage container is returned. MailInnovationsLabelImage will not be returned. In that case, the labels for Small Package Tracking Number and Mail Innovations Tracking Number will be stitched in single PDF file.
    *
    * @param LabelResultsMailInnovationsLabelImage $mailInnovationsLabelImage
    *
    * @return self
    */
    public function setMailInnovationsLabelImage(LabelResultsMailInnovationsLabelImage $mailInnovationsLabelImage) : self
    {
        $this->initialized['mailInnovationsLabelImage'] = true;
        $this->mailInnovationsLabelImage = $mailInnovationsLabelImage;
        return $this;
    }
    /**
     * Container for the HTML receipt and the receipt link.
     *
     * @return LabelResultsReceipt
     */
    public function getReceipt() : LabelResultsReceipt
    {
        return $this->receipt;
    }
    /**
     * Container for the HTML receipt and the receipt link.
     *
     * @param LabelResultsReceipt $receipt
     *
     * @return self
     */
    public function setReceipt(LabelResultsReceipt $receipt) : self
    {
        $this->initialized['receipt'] = true;
        $this->receipt = $receipt;
        return $this;
    }
    /**
     * Container tag for the International Forms. Currently, represents UPS Premium Care Form for Electronic Returns Label and Electronic Import Control Label. UPS  Premium Care Form for Forward shipment if Subverion is 1903 or greater  Applicable for Electronic Return Label and Electronic Import Control Label shipments only. Applies only for Canada domestic shipments. Returned for request with SubVersion greater than or equal to 1707.  UPS  Premium Care Form for Forward shipment if Subverion is 1903 or greater
     *
     * @return LabelResultsForm
     */
    public function getForm() : LabelResultsForm
    {
        return $this->form;
    }
    /**
     * Container tag for the International Forms. Currently, represents UPS Premium Care Form for Electronic Returns Label and Electronic Import Control Label. UPS  Premium Care Form for Forward shipment if Subverion is 1903 or greater  Applicable for Electronic Return Label and Electronic Import Control Label shipments only. Applies only for Canada domestic shipments. Returned for request with SubVersion greater than or equal to 1707.  UPS  Premium Care Form for Forward shipment if Subverion is 1903 or greater
     *
     * @param LabelResultsForm $form
     *
     * @return self
     */
    public function setForm(LabelResultsForm $form) : self
    {
        $this->initialized['form'] = true;
        $this->form = $form;
        return $this;
    }
}