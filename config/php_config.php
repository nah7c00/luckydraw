<?php
	$meta_keywords = "愛滋病測試，AIDS測試，hiv測試，愛滋測試九龍，AIDS測試九龍，hiv測試九龍，aids test kowloon,hiv test kowloon,aids test, hiv test,梅毒測試，syphilis test,梅毒測試，性病測試，STD test,STI test,heterosexual,異性戀, luckydraw, luckydrawhk, lucky draw studio";
	$meta_description = "愛滋病測試，AIDS測試，hiv測試，愛滋測試九龍，AIDS測試九龍，hiv測試九龍，aids test kowloon,hiv test kowloon,aids test, hiv test,梅毒測試，syphilis test,梅毒測試，性病測試，STD test,STI test,heterosexual,異性戀, luckydraw, luckydrawhk, lucky draw studio";

	$locale = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
	switch($locale) {
		case "en-US": $global_lang = EN;
			break;
		case "en": $global_lang = EN;
			break;
		case "zh-TW": $global_lang = ZH;
			break;
		case "zh-HW": $global_lang = ZH;
			break;
		case "zh": $global_lang = ZH;
			break;
		default: $global_lang = EN;
			break;
	}
?>