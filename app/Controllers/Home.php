<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Inicio';
        
        // Datos para las diferentes categorías
        $data['smartphones'] = [
            [
                'id' => 1,
                'titulo' => 'iPhone 16 Pro',
                'precio' => '999.99',
                'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                'alt' => 'iPhone 16 Pro',
                'descripcion' => 'El iPhone 16 Pro con las últimas tecnologías de Apple.'
            ],
            [
                'id' => 2,
                'titulo' => 'iPhone 16 Pro Max',
                'precio' => '1,199.99',
                'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                'alt' => 'iPhone 16 Pro Max',
                'descripcion' => 'La versión más grande y potente del iPhone 16 Pro.'
            ],
            [
                'id' => 3,
                'titulo' => 'Samsung Galaxy S24',
                'precio' => '899.99',
                'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                'alt' => 'Samsung Galaxy S24',
                'descripcion' => 'El smartphone más avanzado de Samsung.'
            ],
            [
                'id' => 4,
                'titulo' => 'Google Pixel 8',
                'precio' => '699.99',
                'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                'alt' => 'Google Pixel 8',
                'descripcion' => 'La mejor cámara en un smartphone Android.'
            ]
        ];

        $data['laptops'] = [
            [
                'id' => 5,
                'titulo' => 'MacBook Pro',
                'precio' => '1,499.99',
                'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                'alt' => 'MacBook Pro',
                'descripcion' => 'Potencia profesional para tus proyectos más exigentes.'
            ],
            [
                'id' => 6,
                'titulo' => 'Dell XPS 13',
                'precio' => '1,299.99',
                'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                'alt' => 'Dell XPS 13',
                'descripcion' => 'La laptop ultrabook más elegante de Dell.'
            ],
            [
                'id' => 7,
                'titulo' => 'HP Spectre x360',
                'precio' => '1,199.99',
                'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                'alt' => 'HP Spectre x360',
                'descripcion' => 'Laptop convertible con diseño premium.'
            ],
            [
                'id' => 8,
                'titulo' => 'Lenovo ThinkPad X1',
                'precio' => '1,399.99',
                'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                'alt' => 'Lenovo ThinkPad X1',
                'descripcion' => 'La laptop empresarial más confiable.'
            ]
        ];

        $data['tablets'] = [
            [
                'id' => 9,
                'titulo' => 'iPad Pro',
                'precio' => '799.99',
                'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                'alt' => 'iPad Pro',
                'descripcion' => 'La tablet más avanzada para creativos y profesionales.'
            ],
            [
                'id' => 10,
                'titulo' => 'Samsung Galaxy Tab S9',
                'precio' => '649.99',
                'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                'alt' => 'Samsung Galaxy Tab S9',
                'descripcion' => 'La mejor tablet Android para productividad.'
            ],
            [
                'id' => 11,
                'titulo' => 'iPad Air',
                'precio' => '599.99',
                'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                'alt' => 'iPad Air',
                'descripcion' => 'El equilibrio perfecto entre potencia y portabilidad.'
            ],
            [
                'id' => 12,
                'titulo' => 'Microsoft Surface Pro',
                'precio' => '899.99',
                'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                'alt' => 'Microsoft Surface Pro',
                'descripcion' => 'La tablet que reemplaza tu laptop.'
            ]
        ];

        $data['accesorios'] = [
            [
                'id' => 13,
                'titulo' => 'AirPods Pro',
                'precio' => '249.99',
                'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                'alt' => 'AirPods Pro',
                'descripcion' => 'Auriculares inalámbricos con cancelación de ruido activa.'
            ],
            [
                'id' => 14,
                'titulo' => 'Apple Watch Series 9',
                'precio' => '399.99',
                'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                'alt' => 'Apple Watch Series 9',
                'descripcion' => 'El reloj inteligente más avanzado de Apple.'
            ],
            [
                'id' => 15,
                'titulo' => 'Cargador MagSafe',
                'precio' => '39.99',
                'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                'alt' => 'Cargador MagSafe',
                'descripcion' => 'Carga inalámbrica rápida y eficiente.'
            ],
            [
                'id' => 16,
                'titulo' => 'Fundas Premium',
                'precio' => '49.99',
                'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                'alt' => 'Fundas Premium',
                'descripcion' => 'Protección elegante para tus dispositivos.'
            ]
        ];

        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/heroSection');
        
        // Secciones de categorías
        echo view('front/secciones/productos', ['productos' => $data['smartphones'], 'titulo_categoria' => 'Smartphones', 'url_ver_mas' => base_url('categoria/smartphones')]);
        echo view('front/secciones/productos', ['productos' => $data['laptops'], 'titulo_categoria' => 'Laptops', 'url_ver_mas' => base_url('categoria/laptops')]);
        echo view('front/secciones/productos', ['productos' => $data['tablets'], 'titulo_categoria' => 'Tablets', 'url_ver_mas' => base_url('categoria/tablets')]);
        echo view('front/secciones/productos', ['productos' => $data['accesorios'], 'titulo_categoria' => 'Accesorios', 'url_ver_mas' => base_url('categoria/accesorios')]);
        
        echo view('front/secciones/footer');
    }
    
    public function productos()
    {
        $data['title'] = 'Productos';
        
        // Datos de las categorías para mostrar en cards
        $data['categorias'] = [
            [
                'slug' => 'smartphones',
                'titulo' => 'Smartphones',
                'descripcion' => 'Los smartphones más avanzados del mercado con las últimas tecnologías.',
                'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                'icono' => 'fas fa-mobile-alt',
                'color' => 'primary',
                'cantidad_productos' => 6,
                'precio_desde' => '$699.99'
            ],
            [
                'slug' => 'laptops',
                'titulo' => 'Laptops',
                'descripcion' => 'Laptops profesionales y gaming para todos tus proyectos.',
                'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                'icono' => 'fas fa-laptop',
                'color' => 'success',
                'cantidad_productos' => 6,
                'precio_desde' => '$1,199.99'
            ],
            [
                'slug' => 'tablets',
                'titulo' => 'Tablets',
                'descripcion' => 'Tablets versátiles para trabajo, creatividad y entretenimiento.',
                'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                'icono' => 'fas fa-tablet-alt',
                'color' => 'info',
                'cantidad_productos' => 6,
                'precio_desde' => '$399.99'
            ],
            [
                'slug' => 'accesorios',
                'titulo' => 'Accesorios',
                'descripcion' => 'Accesorios premium para complementar tus dispositivos.',
                'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                'icono' => 'fas fa-headphones',
                'color' => 'warning',
                'cantidad_productos' => 6,
                'precio_desde' => '$39.99'
            ]
        ];
        
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/categorias', $data);
        echo view('front/secciones/footer');
    }

    public function iPhone16ProMax()
    {
        $data['title'] = 'iPhone 16 Pro Max';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/productoPresentacion');
        echo view('front/secciones/productos');
        echo view('front/secciones/footer');
    }

    // Método único para manejar todas las categorías
    public function categoria()
    {
        /* Toda esta parte la hice con inteligencia artificial, para crear las paginas de las distintas categorias de productos */
        // Obtener la categoría de la URL usando el método correcto
        $categoria = $this->request->getUri()->getSegment(2);
        
        // Validar que la categoría sea válida
        $categorias_validas = ['smartphones', 'laptops', 'tablets', 'accesorios'];
        if (!in_array($categoria, $categorias_validas)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Categoría no encontrada');
        }
        
        // Mapeo de títulos de categorías
        $titulos = [
            'smartphones' => 'Smartphones',
            'laptops' => 'Laptops',
            'tablets' => 'Tablets',
            'accesorios' => 'Accesorios'
        ];
        
        // Datos completos de productos por categoría
        $todos_productos = [
            'smartphones' => [
                [
                    'id' => 1,
                    'titulo' => 'iPhone 16 Pro',
                    'precio' => '999.99',
                    'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                    'alt' => 'iPhone 16 Pro',
                    'descripcion' => 'El iPhone 16 Pro con las últimas tecnologías de Apple.'
                ],
                [
                    'id' => 2,
                    'titulo' => 'iPhone 16 Pro Max',
                    'precio' => '1,199.99',
                    'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                    'alt' => 'iPhone 16 Pro Max',
                    'descripcion' => 'La versión más grande y potente del iPhone 16 Pro.'
                ],
                [
                    'id' => 3,
                    'titulo' => 'Samsung Galaxy S24',
                    'precio' => '899.99',
                    'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                    'alt' => 'Samsung Galaxy S24',
                    'descripcion' => 'El smartphone más avanzado de Samsung.'
                ],
                [
                    'id' => 4,
                    'titulo' => 'Google Pixel 8',
                    'precio' => '699.99',
                    'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                    'alt' => 'Google Pixel 8',
                    'descripcion' => 'La mejor cámara en un smartphone Android.'
                ],
                [
                    'id' => 17,
                    'titulo' => 'OnePlus 12',
                    'precio' => '799.99',
                    'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                    'alt' => 'OnePlus 12',
                    'descripcion' => 'Rendimiento excepcional a un precio competitivo.'
                ],
                [
                    'id' => 18,
                    'titulo' => 'Xiaomi 14 Ultra',
                    'precio' => '899.99',
                    'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                    'alt' => 'Xiaomi 14 Ultra',
                    'descripcion' => 'Fotografía profesional en tu bolsillo.'
                ]
            ],
            'laptops' => [
                [
                    'id' => 5,
                    'titulo' => 'MacBook Pro',
                    'precio' => '1,499.99',
                    'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                    'alt' => 'MacBook Pro',
                    'descripcion' => 'Potencia profesional para tus proyectos más exigentes.'
                ],
                [
                    'id' => 6,
                    'titulo' => 'Dell XPS 13',
                    'precio' => '1,299.99',
                    'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                    'alt' => 'Dell XPS 13',
                    'descripcion' => 'La laptop ultrabook más elegante de Dell.'
                ],
                [
                    'id' => 7,
                    'titulo' => 'HP Spectre x360',
                    'precio' => '1,199.99',
                    'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                    'alt' => 'HP Spectre x360',
                    'descripcion' => 'Laptop convertible con diseño premium.'
                ],
                [
                    'id' => 8,
                    'titulo' => 'Lenovo ThinkPad X1',
                    'precio' => '1,399.99',
                    'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                    'alt' => 'Lenovo ThinkPad X1',
                    'descripcion' => 'La laptop empresarial más confiable.'
                ],
                [
                    'id' => 19,
                    'titulo' => 'ASUS ROG Zephyrus',
                    'precio' => '1,799.99',
                    'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                    'alt' => 'ASUS ROG Zephyrus',
                    'descripcion' => 'Gaming laptop con rendimiento excepcional.'
                ],
                [
                    'id' => 20,
                    'titulo' => 'Razer Blade 15',
                    'precio' => '1,899.99',
                    'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                    'alt' => 'Razer Blade 15',
                    'descripcion' => 'La laptop gaming más elegante del mercado.'
                ]
            ],
            'tablets' => [
                [
                    'id' => 9,
                    'titulo' => 'iPad Pro',
                    'precio' => '799.99',
                    'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                    'alt' => 'iPad Pro',
                    'descripcion' => 'La tablet más avanzada para creativos y profesionales.'
                ],
                [
                    'id' => 10,
                    'titulo' => 'Samsung Galaxy Tab S9',
                    'precio' => '649.99',
                    'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                    'alt' => 'Samsung Galaxy Tab S9',
                    'descripcion' => 'La mejor tablet Android para productividad.'
                ],
                [
                    'id' => 11,
                    'titulo' => 'iPad Air',
                    'precio' => '599.99',
                    'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                    'alt' => 'iPad Air',
                    'descripcion' => 'El equilibrio perfecto entre potencia y portabilidad.'
                ],
                [
                    'id' => 12,
                    'titulo' => 'Microsoft Surface Pro',
                    'precio' => '899.99',
                    'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                    'alt' => 'Microsoft Surface Pro',
                    'descripcion' => 'La tablet que reemplaza tu laptop.'
                ],
                [
                    'id' => 21,
                    'titulo' => 'iPad Mini',
                    'precio' => '499.99',
                    'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                    'alt' => 'iPad Mini',
                    'descripcion' => 'Compacta y potente para uso portátil.'
                ],
                [
                    'id' => 22,
                    'titulo' => 'Lenovo Tab P11',
                    'precio' => '399.99',
                    'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                    'alt' => 'Lenovo Tab P11',
                    'descripcion' => 'Tablet Android versátil y asequible.'
                ]
            ],
            'accesorios' => [
                [
                    'id' => 13,
                    'titulo' => 'AirPods Pro',
                    'precio' => '249.99',
                    'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                    'alt' => 'AirPods Pro',
                    'descripcion' => 'Auriculares inalámbricos con cancelación de ruido activa.'
                ],
                [
                    'id' => 14,
                    'titulo' => 'Apple Watch Series 9',
                    'precio' => '399.99',
                    'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                    'alt' => 'Apple Watch Series 9',
                    'descripcion' => 'El reloj inteligente más avanzado de Apple.'
                ],
                [
                    'id' => 15,
                    'titulo' => 'Cargador MagSafe',
                    'precio' => '39.99',
                    'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                    'alt' => 'Cargador MagSafe',
                    'descripcion' => 'Carga inalámbrica rápida y eficiente.'
                ],
                [
                    'id' => 16,
                    'titulo' => 'Fundas Premium',
                    'precio' => '49.99',
                    'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                    'alt' => 'Fundas Premium',
                    'descripcion' => 'Protección elegante para tus dispositivos.'
                ],
                [
                    'id' => 23,
                    'titulo' => 'Teclado Magic Keyboard',
                    'precio' => '99.99',
                    'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                    'alt' => 'Teclado Magic Keyboard',
                    'descripcion' => 'Teclado inalámbrico con diseño minimalista.'
                ],
                [
                    'id' => 24,
                    'titulo' => 'Mouse Magic Mouse',
                    'precio' => '79.99',
                    'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                    'alt' => 'Mouse Magic Mouse',
                    'descripcion' => 'Mouse inalámbrico con gestos táctiles.'
                ]
            ]
        ];
        
        $data['title'] = $titulos[$categoria];
        $data['categoria'] = $categoria;
        $data['titulo_categoria'] = $titulos[$categoria];
        $data['productos'] = $todos_productos[$categoria];
        
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/categoria', $data);
        echo view('front/secciones/footer');
    }

    public function sobreNosotros()
    {
        $data['title'] = 'Sobre Nosotros';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/sobreNosotros');
        echo view('front/secciones/footer');
    }
    public function AcercaDe()
    {
        $data['title'] = 'Acerca de';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/AcercaDe');
        echo view('front/secciones/footer');
    }
    public function Registrarse()
    {
        $data['title'] = 'Registrarse';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('back/users/Registrarse');
        echo view('front/secciones/footer');
    }
    public function IniciarSesion()
    {
        $data['title'] = 'Iniciar Sesión';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('back/users/IniciarSesion');
        echo view('front/secciones/footer');
    }


}
