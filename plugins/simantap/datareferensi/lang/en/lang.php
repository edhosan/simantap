<?php return [
    'plugin' => [
        'name' => 'DataReferensi',
        'description' => 'Data Referensi',
    ],
    'kecamatan' => [
        'access_kecamatan' => 'Manage Kecamatan',
        'tab' => 'Kecamatan',
    ],
    'bulan' => [
        'access_bulan' => 'Manage Table Bulan',
        'tab' => 'Bulan',
    ],
    'simantap' => [
        'datareferensi' => [
            'kategori' => [
                'id' => 'ID',
                'nm_kategori' => 'KATEGORI',
                'created_at' => 'TGL DIBUAT',
                'updated_at' => 'TGL DIUBAH',
                'deleted_at' => 'TGL DIHAPUS',
            ],
            'menu' => [
                'recycle' => 'Trashed',
                'kategori' => 'Kategori',
            ],
            'permissions' => [
                'recycle' => [
                    'kategori' => 'Menghapus dan mengembalikan data Kategori',
                ],
            ],
            'komoditas' => [
                'id' => [
                    'label' => 'ID',
                ],
                'nm_komoditi' => [
                    'label' => 'KOMODITAS',
                ],
            ],
        ],
    ],
];