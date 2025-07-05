<?php


class HomeController extends Controller {
    public function index() {
        $berita = [
            [
                'id' => 1,
                'title' => 'Penerimaan Mahasiswa Baru 2023',
                'description' => 'Universitas Harapan Semarang membuka pendaftaran mahasiswa baru untuk tahun akademik 2023. Segera daftarkan dirimu dan raih kesempatan untuk belajar di kampus terbaik.',
                'content' => 'Universitas Harapan Semarang membuka pendaftaran mahasiswa baru untuk tahun akademik 2023. Segera daftarkan dirimu dan raih kesempatan untuk belajar di kampus terbaik. Kami menyediakan berbagai program studi yang berkualitas dan didukung oleh tenaga pengajar yang berpengalaman. Jangan lewatkan kesempatan ini untuk menjadi bagian dari komunitas akademik kami.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg7x_ZsLtQ1rUcq1PDnqkjXP4zg1Yiv9xVkg&s',
                'created_at' => '2023-01-01 10:00:00'
            ],
            [
                'id' => 2,
                'title' => 'Kerja Sama Internasional',
                'description' => 'Universitas Harapan Semarang menjalin kerja sama dengan',
                'content' => 'Universitas Harapan Semarang menjalin kerja sama dengan universitas terkemuka di luar negeri untuk meningkatkan kualitas pendidikan dan penelitian. Mahasiswa kami akan mendapatkan kesempatan untuk belajar di luar negeri dan berpartisipasi dalam program pertukaran pelajar.',
                'image' => 'data:image/jpeg;base64,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',
                'created_at' => '2023-01-02 10:00:00'
            ]
        ];
        $galeri = [
            [
                'id' => 1,
                'title' => 'Kegiatan Belajar Mengajar',
                'description' => 'Kegiatan belajar mengajar di kelas',
                'image' => 'https://images.unsplash.com/photo-1561089489-f13d5e730d72?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D.jpg',
                'created_at' => '2023-01-01 10:00:00'
            ],
            [
                'id' => 2,
                'title' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Kegiatan ekstrakurikuler siswa',
                'image' => 'https://images.unsplash.com/photo-1561089489-f13d5e730d72?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D.jpg',
                'created_at' => '2023-01-02 10:00:00'
            ],
            [
                'id' => 3,
                'title' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Kegiatan ekstrakurikuler siswa',
                'image' => 'https://images.unsplash.com/photo-1561089489-f13d5e730d72?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D.jpg',
                'created_at' => '2023-01-02 10:00:00'
            ],
            [
                'id' => 4,
                'title' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Kegiatan ekstrakurikuler siswa',
                'image' => 'https://images.unsplash.com/photo-1561089489-f13d5e730d72?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D.jpg',
                'created_at' => '2023-01-02 10:00:00'
            ],
            [
                'id' => 5,
                'title' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Kegiatan ekstrakurikuler siswa',
                'image' => 'https://images.unsplash.com/photo-1561089489-f13d5e730d72?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D.jpg',
                'created_at' => '2023-01-02 10:00:00'
            ],
            [
                'id' => 6,
                'title' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Kegiatan ekstrakurikuler siswa',
                'image' => 'https://images.unsplash.com/photo-1561089489-f13d5e730d72?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D.jpg',
                'created_at' => '2023-01-02 10:00:00'
            ],
            ];
        // Load the home view
        $this->layout('home/index', 'default',[
            'title' => 'Home',
            'description' => 'Selamat datang di Sistem Informasi Universitas Harapan Semarang',
            'berita' => $berita,
            'galeri' => $galeri,
        ]);
    }

    
}
