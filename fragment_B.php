class PriceFormatter {

    public function format(float $n): string {

        switch ($this->locale) {

            case 'en_US':

                return '$' . number_format($n, 2);

            case 'de_DE':

                return number_format($n, 2, ',', '.') . ' €';

            case 'ja_JP':

                return '¥' . number_format($n, 0);

        }


    }


}