<?php
namespace App\Controllers;
class FormMahasiswa extends BaseController
{
    public function InputView()
    {
        return View('Form/form');
    }

    public function ResultView()
    {
        $nama = $this->request->getPOST('nama');
        $nim = $this->request->getPOST('nim');
        $kelas = $this->request->getPOST('kelas');
        $matkul = $this->request->getPOST('matkul');
        $dosen = $this->request->getPOST('dosen');
        $asisten = $this->request->getPOST('asisten');

        $data = [
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'matkul' => $matkul,
            'dosen' => $dosen,
            'asisten' => $asisten,
        ];
        return view('FORM/Result', $data);
    }
}
