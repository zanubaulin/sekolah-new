<?php

class GaleriController extends Controller {
    protected $galeri = [
        [
            'id' => 1,
            'title' => 'Kegiatan Belajar Mengajar',
            'description' => 'Kegiatan belajar mengajar di kelas',
            'image' => 'https://images.unsplash.com/photo-1561089489-f13d5e730d72?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'created_at' => '2023-01-01 10:00:00'
        ],
        [
            'id' => 2,
            'title' => 'Kegiatan Ekstrakurikuler',
            'description' => 'Kegiatan ekstrakurikuler siswa',
            'image' => 'https://images.unsplash.com/photo-1747674148491-51f8a5c723db?q=80&w=866&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
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
        ]
        [
            'id' => 5,
            'title' => 'Kegiatan Ekstrakurikuler',
            'description' => 'Kegiatan ekstrakurikuler siswa',
            'image' => 'https://images.unsplash.com/photo-1561089489-f13d5e730d72?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D.jpg',
            'created_at' => '2023-01-02 10:00:00'
        ]
        [
            'id' => 6,
            'title' => 'Kegiatan Ekstrakurikuler',
            'description' => 'Kegiatan ekstrakurikuler siswa',
            'image' => 'https://images.unsplash.com/photo-1561089489-f13d5e730d72?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D.jpg',
            'created_at' => '2023-01-02 10:00:00'
        ];
    public function index() {
        // Load the galeri view
        $this->layout('galeri/index', 'default', [
            'title' => 'Galeri',
            'description' => 'Galeri foto kegiatan dan acara di Universitas Widya Husada Semarang',
            'galeri' => $this->galeri
        ]);
    }
    ]
    public function detail($id) {
        // Load the galeri detail view
        $this->layout('galeri/detail', 'default', [
            'title' => 'Detail Galeri',
            'description' => 'Detail galeri dengan ID: ' . $id
        ]);
    }
}
