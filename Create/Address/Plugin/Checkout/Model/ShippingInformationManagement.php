<?php
namespace Create\Address\Plugin\Checkout\Model;
 
use Magento\Quote\Model\QuoteRepository;
 
class ShippingInformationManagement
{
    /**
     * @var QuoteRepository
     */

    protected $quoteRepository;

    /**
     * @param QuoteRepository $quoteRepository
     * @return $this
     */

    public function __construct(QuoteRepository $quoteRepository)
    {
        $this->quoteRepository = $quoteRepository;
    }
    
    /**
     * To save value in quote Table
     *
     * @param ShippingInformationManagement $subject
     * @param int $cartId
     * @param ShippingInformationInterface $addressInformation
     * @return $this
     */
    
    public function beforeSaveAddressInformation(
        \Magento\Checkout\Model\ShippingInformationManagement $subject,
        $cartId,
        \Magento\Checkout\Api\Data\ShippingInformationInterface $addressInformation
    ) {
 
        if (!$extAttributes = $addressInformation->getExtensionAttributes()) {
            return;
        }
 
        $quote = $this->quoteRepository->getActive($cartId);
 
        $quote->setCustomFieldText($extAttributes->getCustomFieldText());
    }
}
