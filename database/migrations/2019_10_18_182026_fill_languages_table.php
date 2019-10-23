<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class FillLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Db::table('languages')->insert([
            ['name' => 'English', 'code' => 'en', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish', 'code' => 'es', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'German', 'code' => 'de', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'French', 'code' => 'fr', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Afrikaans', 'code' => 'af', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Albanian', 'code' => 'sq', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Arabic', 'code' => 'ar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Basque', 'code' => 'eu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Belarusian', 'code' => 'be', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bulgarian', 'code' => 'bg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Catalan', 'code' => 'ca', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chinese (Simplified)', 'code' => 'zh-cn', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chinese (Traditional)', 'code' => 'zh-tw', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Croatian', 'code' => 'hr', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Czech', 'code' => 'cs', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Danish', 'code' => 'da', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dutch', 'code' => 'nl', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dutch (Belgium)', 'code' => 'nl-be', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dutch (Netherlands)', 'code' => 'nl-nl', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'English (Australia)', 'code' => 'en-au', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'English (Belize)', 'code' => 'en-bz', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'English (Canada)', 'code' => 'en-ca', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'English (Ireland)', 'code' => 'en-ie', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'English (Jamaica)', 'code' => 'en-jm', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'English (New Zealand)', 'code' => 'en-nz', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'English (Phillipines)', 'code' => 'en-ph', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'English (South Africa)', 'code' => 'en-za', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'English (Trinidad)', 'code' => 'en-tt', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'English (United Kingdom)', 'code' => 'en-gb', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'English (United States)', 'code' => 'en-us', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'English (Zimbabwe)', 'code' => 'en-zw', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Estonian', 'code' => 'et', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Faeroese', 'code' => 'fo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finnish', 'code' => 'fi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'French (Belgium)', 'code' => 'fr-be', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'French (Canada)', 'code' => 'fr-ca', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'French (France)', 'code' => 'fr-fr', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'French (Luxembourg)', 'code' => 'fr-lu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'French (Monaco)', 'code' => 'fr-mc', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'French (Switzerland)', 'code' => 'fr-ch', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gaelic', 'code' => 'gd', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Galician', 'code' => 'gl', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'German (Austria)', 'code' => 'de-at', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'German (Germany)', 'code' => 'de-de', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'German (Liechtenstein)', 'code' => 'de-li', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'German (Luxembourg)', 'code' => 'de-lu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'German (Switzerland)', 'code' => 'de-ch', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Greek', 'code' => 'el', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hawaiian', 'code' => 'haw', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hebrew', 'code' => 'he', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hungarian', 'code' => 'hu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Icelandic', 'code' => 'is', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Indonesian', 'code' => 'in', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Irish', 'code' => 'ga', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Italian', 'code' => 'it', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Italian (Italy)', 'code' => 'it-it', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Italian (Switzerland)', 'code' => 'it-ch', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Japanese', 'code' => 'ja', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Korean', 'code' => 'ko', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Macedonian', 'code' => 'mk', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nepali', 'code' => 'ne', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Norwegian', 'code' => 'no', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Persian', 'code' => 'fa', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Polish', 'code' => 'pl', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Portuguese', 'code' => 'pt', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Portuguese (Brazil)', 'code' => 'pt-br', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Portuguese (Portugal)', 'code' => 'pt-pt', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Romanian', 'code' => 'ro', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Romanian (Moldova)', 'code' => 'ro-mo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Romanian (Romania)', 'code' => 'ro-ro', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Russian', 'code' => 'ru', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Russian (Moldova)', 'code' => 'ru-mo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Russian (Russia)', 'code' => 'ru-ru', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Serbian', 'code' => 'sr', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Slovak', 'code' => 'sk', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Slovenian', 'code' => 'sl', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Argentina)', 'code' => 'es-ar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Bolivia)', 'code' => 'es-bo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Chile)', 'code' => 'es-cl', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Colombia)', 'code' => 'es-co', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Costa Rica)', 'code' => 'es-cr', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Dominican Republic)', 'code' => 'es-do', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Ecuador)', 'code' => 'es-ec', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (El Salvador)', 'code' => 'es-sv', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Guatemala)', 'code' => 'es-gt', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Honduras)', 'code' => 'es-hn', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Mexico)', 'code' => 'es-mx', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Nicaragua)', 'code' => 'es-ni', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Panama)', 'code' => 'es-pa', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Paraguay)', 'code' => 'es-py', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Peru)', 'code' => 'es-pe', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Puerto Rico)', 'code' => 'es-pr', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Spain)', 'code' => 'es-es', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Uruguay)', 'code' => 'es-uy', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish (Venezuela)', 'code' => 'es-ve', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Swedish', 'code' => 'sv', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Swedish (Finland)', 'code' => 'sv-fi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Swedish (Sweden)', 'code' => 'sv-se', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Turkish', 'code' => 'tr', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ukranian', 'code' => 'uk', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Db::table('languages')->truncate();
    }
}
