<?php

class About{
	public function index($nama = 'Kharan Prayoga', $pekerjaan = 'Siswa')
	{
		echo "Halo, Nama Saya $nama, Saya Adalah Seorang $pekerjaan";
	}
	public function page()
	{
		echo 'About/page';
	}
}