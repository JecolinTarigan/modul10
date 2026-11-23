<?php
header('Content-Type: text/plain; charset=utf-8');

// Hanya menerima request dengan method POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Metode request tidak diizinkan!';
    exit;
}

// Tangkap data "nama" yang dikirim lewat POST
$nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';

// Validasi: input tidak boleh kosong
if ($nama === '') {
    http_response_code(400);
    echo 'Input nama tidak boleh kosong!';
    exit;
}

// Kembalikan response dalam format teks
echo 'Halo, ' . $nama . '! Selamat datang di AJAX!';