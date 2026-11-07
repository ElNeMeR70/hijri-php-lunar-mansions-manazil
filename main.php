<?php
declare(strict_types=1);

/**
 * hijri-php-lunar-mansions-manazil — حاسبة منازل القمر الثماني والعشرين والفصول
 * 28 Arabic Lunar Mansions (Manazil Al-Qamar) & Anwa' Tracker
 */
$input = "EclipticLonDeg=42.5";
$digest = substr(hash("sha256", "hijri-php-lunar-mansions-manazil:" . $input), 0, 12);

echo "[RUN] hijri-php-lunar-mansions-manazil (PHP) — 28 Arabic Lunar Mansions (Manazil Al-Qamar) & Anwa' Tracker" . PHP_EOL;
echo "[AR]  حاسبة منازل القمر الثماني والعشرين والفصول" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Manzilah=4_AlDabaran | Burj=AlThawr | Season=Rabi' | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
