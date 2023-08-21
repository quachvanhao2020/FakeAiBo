<?php
error_reporting(0);
error_reporting(E_ALL);
define("APP_NAME",isset($_ENV['APP_NAME']) ? $_ENV['APP_NAME'] : "TradeMin");
define("APP_URL",isset($_ENV['APP_URL']) ? $_ENV['APP_URL'] : "TradeMin");
define("APP_LOGO",isset($_ENV['APP_LOGO']) ? $_ENV['APP_LOGO'] : "https://i.ibb.co/nPHN8xc/logo-search-grid-1x.png");
define("APP_FAVICON",isset($_ENV['APP_FAVICON']) ? $_ENV['APP_FAVICON'] : "https://liketay.com/upload/favicon.png");
define("VERSION",isset($_ENV['VERSION']) ? $_ENV['VERSION'] : "1.2");
define("DEFAULT_USER_LOGO",isset($_ENV['DEFAULT_USER_LOGO']) ? $_ENV['DEFAULT_USER_LOGO'] : "https://i.imgur.com/k9AlaAq.png");
define("DEFAULT_MEMBER_LOGO",isset($_ENV['DEFAULT_MEMBER_LOGO']) ? $_ENV['DEFAULT_MEMBER_LOGO'] : "https://i.imgur.com/k9AlaAq.png");
define("CHAT_ID",isset($_ENV['CHAT_ID']) ? $_ENV['CHAT_ID'] : "1525283119");
define("TELEGRAM_ACCESS_TOKEN",isset($_ENV['TELEGRAM_ACCESS_TOKEN']) ? $_ENV['TELEGRAM_ACCESS_TOKEN'] : "");
define("DEFAULT_LANG",isset($_ENV['DEFAULT_LANG']) ? $_ENV['DEFAULT_LANG'] : "vi");
define("COPYRIGHT",isset($_ENV['COPYRIGHT']) ? $_ENV['COPYRIGHT'] : "Copyright@2023");