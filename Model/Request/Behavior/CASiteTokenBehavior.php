<?php
	namespace MPS\CA
	abstract class CASiteTokenBehavior{
		//AliExpress
		const ALIEXPRESS='ALIEXPRESS';
		//Allyouneed 
		const ALL_YOU_NEED='ALL_YOU_NEED';
		//Amazon.com
		const AMAZON_AUCTIONS='AMAZON_AUCTIONS';
		//Amazon Seller Central - CA
		const AMAZON_CA='AMAZON_CA';
		//Amazon Seller Central - CN
		const AMAZON_CN='AMAZON_CN';
		//Amazon Seller Central - DE
		const AMAZON_DE='AMAZON_DE';
		//Amazon Seller Central - ES
		const AMAZON_ES='AMAZON_ES';
		//Amazon Seller Central - FR
		const AMAZON_FR='AMAZON_FR';
		//Amazon Seller Central - IT
		const AMAZON_IT='AMAZON_IT';
		//Amazon Seller Central - JP
		const AMAZON_JP='AMAZON_JP';
		//Amazon Marketplace
		const AMAZON_MARKETPLACE='AMAZON_MARKETPLACE';
		//Amazon Merchants
		const AMAZON_MERCHANTSAT='AMAZON_MERCHANTSAT';
		//Amazon UK
		const AMAZON_UK='AMAZON_UK';
		//Amazon Seller Central - US
		const AMAZON_US='AMAZON_US';
		//Amazon Webstore
		const AMAZON_WEBSTORE='AMAZON_WEBSTORE';
		//Amazon Webstore - CA
		const AMAZON_WEBSTORE_CA='AMAZON_WEBSTORE_CA';
		//Amazon Webstore - DE
		const AMAZON_WEBSTORE_DE='AMAZON_WEBSTORE_DE';
		//Amazon Webstore - FR
		const AMAZON_WEBSTORE_FR='AMAZON_WEBSTORE_FR';
		//Amazon Webstore - IT
		const AMAZON_WEBSTORE_IT='AMAZON_WEBSTORE_IT';
		//Amazon Webstore - UK
		const AMAZON_WEBSTORE_UK='AMAZON_WEBSTORE_UK';
		//Amazon Webstore - US
		const AMAZON_WEBSTORE_US='AMAZON_WEBSTORE_US';
		//Best Buy
		const BEST_BUY='BEST_BUY';
		//Best Buy Marketplace
		const BEST_BUY_MARKETPLACE='BEST_BUY_MARKETPLACE';
		//Bigcommerce
		const BIGCOMMERCE='BIGCOMMERCE';
		//Rakuten.com Shopping
		const BUY_DOT_COM='BUY_DOT_COM';
		//CDiscount
		const CDISCOUNT='CDISCOUNT';
		//Basic Webstores
		const CHANNELADVISOR_STORE='CHANNELADVISOR_STORE';
		//Checkout by Amazon - CA
		const CHECKOUT_BY_AMAZON_CA='CHECKOUT_BY_AMAZON_CA';
		//Checkout by Amazon - DE
		const CHECKOUT_BY_AMAZON_DE='CHECKOUT_BY_AMAZON_DE';
		//Checkout by Amazon - FR
		const CHECKOUT_BY_AMAZON_FR='CHECKOUT_BY_AMAZON_FR';
		//Checkout By Amazon - IT
		const CHECKOUT_BY_AMAZON_IT='CHECKOUT_BY_AMAZON_IT';
		//Checkout by Amazon - UK
		const CHECKOUT_BY_AMAZON_UK='CHECKOUT_BY_AMAZON_UK';
		//Checkout by Amazon - US
		const CHECKOUT_BY_AMAZON_US='CHECKOUT_BY_AMAZON_US';
		//Demandware
		const DEMANDWARE_STORE='DEMANDWARE_STORE';
		//Checkout Direct
		const DIRECT_SALE='DIRECT_SALE';
		//eBay Austria
		const EBAY_AT='EBAY_AT';
		//eBay Australia
		const EBAY_AU='EBAY_AU';
		//eBay Canada
		const EBAY_CA='EBAY_CA';
		//eBay Switzerland
		const EBAY_CH='EBAY_CH';
		//eBay Germany
		const EBAY_DE='EBAY_DE';
		//eBay Spain
		const EBAY_ES='EBAY_ES';
		//eBay France
		const EBAY_FR='EBAY_FR';
		//eBay Ireland
		const EBAY_IE='EBAY_IE';
		//eBay Italy
		const EBAY_IT='EBAY_IT';
		//eBay Motors
		const EBAY_MOTORS='EBAY_MOTORS';
		//eBay Motors Fixed Price
		const EBAY_MOTORS_FIXED_PRICE='EBAY_MOTORS_FIXED_PRICE';
		//eBay Netherlands
		const EBAY_NL='EBAY_NL';
		//eBay Fixed Price
		const EBAY_STORES='EBAY_STORES';
		//eBay UK
		const EBAY_UK='EBAY_UK';
		//eBay
		const EBAY_US='EBAY_US';
		//GrouponGoods
		const GROUPON_GOODS='GROUPON_GOODS';
		//Jet
		const JET='JET';
		//LaRedoute
		const LA_REDOUTE='LA_REDOUTE';
		//Magento
		const MAGENTO_ENTERPRISE='MAGENTO_ENTERPRISE';
		//Magento Go
		const MAGENTO_GO='MAGENTO_GO';
		//MercadoLibre AR
		const MERCADOLIBRE_AR='MERCADOLIBRE_AR';
		//MercadoLivre BR
		const MERCADOLIBRE_BR='MERCADOLIBRE_BR';
		//MercadoLivre BR (USD)
		const MERCADOLIBRE_BR_US='MERCADOLIBRE_BR_US';
		//MercadoLibre CBT
		const MERCADOLIBRE_CBT='MERCADOLIBRE_CBT';
		//MercadoLibre MX
		const MERCADOLIBRE_MX='MERCADOLIBRE_MX';
		//Newegg
		const NEWEGG='NEWEGG';
		//Newegg Business
		const NEWEGG_BUSINESS='NEWEGG_BUSINESS';
		//Newegg Canada
		const NEWEGG_CA='NEWEGG_CA';
		//OneStopPlus
		const ONE_STOP_PLUS='ONE_STOP_PLUS';
		//Overstock
		const OVERSTOCK='OVERSTOCK';
		//Overstock Shopping
		const OVERSTOCK_SHOPPING='OVERSTOCK_SHOPPING';
		//Pixmania
		const PIXMANIA='PIXMANIA';
		//Play.com
		const PLAY_DOT_COM='PLAY_DOT_COM';
		//Rakuten.de
		const RAKUTEN_DE='RAKUTEN_DE';
		//Rakuten UK
		const RAKUTEN_UK='RAKUTEN_UK';
		//Sell on Sears
		const SELL_ON_SEARS='SELL_ON_SEARS';
		//SellerCustom
		const SELLERCUSTOM='SELLERCUSTOM';
		//Shop.com Marketplace
		const SHOP_DOT_COM='SHOP_DOT_COM';
		//Shopify
		const SHOPIFY='SHOPIFY';
		//Shopify POS
		const SHOPIFY_POS='SHOPIFY_POS';
		//Premium Webstores
		const STOREADVISOR_PREMIUM='STOREADVISOR_PREMIUM';
		//Tesco
		const TESCO='TESCO';
		//Tmall Global
		const TMALL_GLOBAL='TMALL_GLOBAL';
		//TradeMe
		const TRADEME='TRADEME';
		//Trading Post
		const TRADING_POST='TRADING_POST';
		//Unknown
		const UNKNOWN='UNKNOWN';
		//Walmart
		const WALMART='WALMART';
		//Walmart Marketplace
		const WALMART_MARKETPLACE='WALMART_MARKETPLACE';
		//Yahoo!
		const YAHOO='YAHOO';
		//Yahoo! Stores
		const YAHOO_STORES='YAHOO_STORES';
		//Zalando - DE
		const ZALANDO_DE='ZALANDO_DE';
	}
?>