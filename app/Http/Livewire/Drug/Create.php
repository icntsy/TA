<?php

namespace App\Http\Livewire\Drug;

use App\Models\Drug;
use Exception;
use Livewire\Component;
use PHPMailer\PHPMailer\PHPMailer;

use function React\Promise\reduce;

class Create extends Component
{
    public $nama;
    // public $keterangan;
    public $stok;
    // public $harga;
    public $min_stok;
    public $harga;

    protected $rules = [
        'nama' => 'required',
        // 'keterangan' => 'required',
        'stok' => 'required',
        // 'harga' => 'required',
        'min_stok' => 'required|lte:stok',
        'harga' => 'required'
    ];

    public function create()
    {
        $this->validate();

        Drug::create([
            'nama' => $this->nama,
            // 'keterangan' => $this->keterangan,
            'stok' => $this->stok,
            'min_stok' => $this->min_stok,
            'harga' => $this->harga,
        ]);

        if ($this->stok <= 10) {
            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'apotekerlaatachzan@gmail.com';
                $mail->Password = 'gdovtrcofefvghvk';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom("apotekerlaatachzan@gmail.com", "Admin Apoteker");
                $mail->addAddress('apotekerlaatachzan@gmail.com', 'Apoteker Laa Tachzan');
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = "PERINGATAN STOK OBAT HAMPIR HABIS";
                $mail->Body    = "Stok Obat Akan Segera Habis";

                $mail->send();

                $this->reset();
                $this->redirectRoute('drug.index');
            } catch (Exception $e) {
                $this->reset();
                $this->redirectRoute('drug.index');
            }
        } else {
            $this->reset();
            $this->redirectRoute('drug.index');
        }
    }

    public function render()
    {
        return view('livewire.drug.create');
    }
}
