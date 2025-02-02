<?php 
namespace App\Models;

use CodeIgniter\Model;

class OtobusModel extends Model
{
    protected $table = 'otobus';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['ID','Aktif', 'Isim', 'Plaka', 'KoltukSayisi'];

    public function getOtobusList()
    {
        return $this->findAll();
    }

    public function getOtobusByID($id)
    {
        return $this->find($id);
    }

    public function insertOtobus($data)
    {
        return $this->insert($data);
    }

    public function updateOtobus($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteOtobus($id)
    {
        return $this->delete($id);
    }
}
?>