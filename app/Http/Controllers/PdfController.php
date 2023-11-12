<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCPDF;
class PdfController extends Controller
{
    
public function generatePDF()
{
    $pdf = new TCPDF();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();
    $pdf->SetFont('dejavusans', '', 12);
    $pdf->Cell(0, 10, 'Contoh Laporan PDF dengan TCPDF', 0, 1, 'C');
    
    // Tambahkan konten laporan PDF di sini
    $content = "Ini adalah contoh konten laporan PDF.";
    $pdf->MultiCell(0, 10, $content);

    $pdf->Output('laporan.pdf');


}
public function generatePDF1()
{

    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    // Set judul laporan
    $pdf->SetFont('dejavusans', 'B', 16);
    $pdf->Cell(0, 10, 'Laporan PDF Menggunakan TCPDF', 0, 1, 'C');

    // Tambahkan gambar
    $imageFile = public_path('images/logo.png');
    $pdf->Image($imageFile, 50, 40, 100, '', 'PNG');

    // Tambahkan tabel data
    $data = [
        ['ID', 'Nama', 'Alamat'],
        [1, 'John Doe', 'Jl. Contoh 123'],
        [2, 'Jane Smith', 'Jl. Test 456'],
    ];
    $pdf->SetFont('dejavusans', '', 12);
    $pdf->Ln(20); // Spasi
    $pdf->MultiCell(0, 10, 'Data Pelanggan:', 0, 'L');
    $pdf->Ln(10);
    $pdf->SetFillColor(220, 220, 220);
    $pdf->SetTextColor(0);
    $pdf->SetDrawColor(0);
    $pdf->SetFont('dejavusans', 'B');
    foreach ($data as $row) {
        $pdf->Cell(20, 10, $row[0], 1, 0, 'C', 1);
        $pdf->Cell(60, 10, $row[1], 1, 0, 'L', 1);
        $pdf->Cell(60, 10, $row[2], 1, 1, 'L', 1);
    }

    $pdf->Output('laporan.pdf', 'I');
}
public function generatePDF12()
{
//     // Ambil data dari database
//     $data = DB::table('customers')
//         ->join('orders', 'customers.id', '=', 'orders.customer_id')
//         ->select('customers.name', 'customers.address', 'orders.order_number', 'orders.order_date')
//         ->get();

//     $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');
//     $pdf->SetMargins(10, 10, 10);
//     $pdf->AddPage();

//     // Set judul laporan
//     $pdf->SetFont('dejavusans', 'B', 16);
//     $pdf->Cell(0, 10, 'Laporan PDF dengan Data dari Dua Tabel', 0, 1, 'C');

//     // Tabel untuk data
//     $pdf->SetFont('dejavusans', '', 12);
//     $pdf->Ln(20); // Spasi
//     $pdf->MultiCell(0, 10, 'Data Pelanggan dan Pesanan:', 0, 'L');
//     $pdf->Ln(10);
//     $pdf->SetFillColor(220, 220, 220);
//     $pdf->SetTextColor(0);
//     $pdf->SetDrawColor(0);
//     $pdf->SetFont('dejavusans', 'B');

//     // Header tabel
//     $pdf->Cell(40, 10, 'Nama Pelanggan', 1, 0, 'C', 1);
//     $pdf->Cell(60, 10, 'Alamat', 1, 0, 'C', 1);
//     $pdf->Cell(40, 10, 'Nomor Pesanan', 1, 0, 'C', 1);
//     $pdf->Cell(50, 10, 'Tanggal Pesanan', 1, 1, 'C', 1);

//     // Isi tabel
//     foreach ($data as $row) {
//         $pdf->Cell(40, 10, $row->name, 1);
//         $pdf->Cell(60, 10, $row->address, 1);
//         $pdf->Cell(40, 10, $row->order_number, 1);
//         $pdf->Cell(50, 10, $row->order_date, 1, 1);
//     }

//     $pdf->Output('laporan.pdf', 'I');
    }



}
