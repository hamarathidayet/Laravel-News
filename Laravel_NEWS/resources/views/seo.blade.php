@php


function seo($text)
{
    // Türkçe karakterleri Latin karakterlere dönüştürme
    $search = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü');
    $replace = array('C', 'c', 'G', 'g', 'i', 'I', 'O', 'o', 'S', 's', 'U', 'u');
    $text = str_replace($search, $replace, $text);

    // Harf ve sayı dışındaki karakterleri boşluk ile değiştirme
    $text = preg_replace('/[^a-zA-Z0-9]+/', ' ', $text);

    // Birden fazla boşluğu tek boşluk ile değiştirme
    $text = trim(preg_replace('/\s+/', ' ', $text));

    // Boşlukları tire ile değiştirme
    $text = str_replace(' ', '-', $text);

    // Küçük harfe dönüştürme
    $text = strtolower($text);

    return $text;
}


   @endphp
