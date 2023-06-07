<?php 
include_once("Koneksi.php"); 
class Siswa extends Database{

	function tampilDataSiswa(){
		$tampilDataSiswa = "SELECT * FROM siswa";
        return $this->db->query($tampilDataSiswa)->fetch_all(MYSQLI_ASSOC);
	}

    public function viewById($id){
        $datasiswa = "SELECT * FROM siswa WHERE id_siswa = '$id'";
        return $this->db->query($datasiswa)->fetch_assoc();
    }

    //function tambah data 
    public function tambahsiswa($data_siswa)
    {
        $nama_siswa = $data_siswa["nama_siswa"];
        $kelas = $data_siswa["kelas"];
        $photo = $data_siswa["photo"];

        $query = "INSERT INTO siswa VALUES (NULL,'$nama_siswa', '$kelas', '$photo')";
      
      if($this->db->query($query) === TRUE){
        return mysqli_affected_rows($this->db);
        }

    }

    //function hapus data
    public function hapus_siswa($data_siswa)
    {
        $query = "DELETE FROM siswa WHERE id_siswa='$data_siswa'";
        
        if($this->db->query($query) === TRUE){
            return mysqli_affected_rows($this->db);
        }
    }

    //function edit
    public function edit_siswa($data_siswa)
    {
        $id_siswa = $data_siswa["id_siswa"];
        $nama_siswa = $data_siswa["nama_siswa"];
        $kelas = $data_siswa["kelas"];
        $photo = $data_siswa["photo"];

        $query = "UPDATE siswa SET 
            nama_siswa = '$nama_siswa',
            kelas = '$kelas',
            photo = '$photo' WHERE id_siswa = '$id_siswa'";
        
        if($this->db->query($query) === TRUE){
            return "Berhasil";
        }return "Gagal";
    }

}

?>