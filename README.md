# 🧾 Generación de Diplomas en PDF (Laravel + CSS + Blade)

Este archivo documenta el uso de un proyecto para generar diplomas en PDF utilizando herramientas como **Dompdf** en Laravel.  
La plantilla está pensada para ser elegante, funcional y adaptada a impresión o descarga digital.

---

## 📌 Recomendaciones Generales

- Las imágenes deben ubicarse en `public/images/`.
- Para el PDF usa `public_path('images/...')`. Si es uso web, cambia a `asset('images/...')`.
- Utilizar imágenes `.webp` para mejor compresión y nitidez.
- Tipografías utilizadas: `Arial` y `Times New Roman`.
- Formato de página: `Letter` en `landscape`.
## Instalaciones Requeridas

#### Laravel-dompdf
```
composer require barryvdh/laravel-dompdf
```
[Documentación de Laravel-dompdf](https://github.com/barryvdh/laravel-dompdf)


## Controladores

### Ejemplo de uso controlador de vista Blade

- Se obtiene el usuario según su ID
- Uso del modelo User
- Retorna la vista del diploma con los datos del usuario
```VistaDiplomaController
public function show($id){

    $user = \App\Models\User::findOrFail($id);
    
    return view('primer-diploma', compact('user'));
} 
```
### Ejemplo de uso del controlador para generar PDF


Aqui se ajustan el tamaño y la orientación del PDF.
                'Letter' es un tamaño de papel Carta,
                'landscape' es la orientación del papel. (Horizontal)

Se pueden utilizar otros tamaños y orientaciones como:

- 'A4', 'A3', 'Legal', etc.
- Legal: 8.5 x 14 pulgadas - (Oficio)
- A4: 8.27 x 11.69 pulgadas
- A3: 11.69 x 16.54 pulgadas
- 'portrait' para orientación vertical.

---
- `return $pdf->download($filename);` descarga directamente el archivo PDF
- `return $pdf->stream($filename); ` muestra el PDF en el navegador 

```PdfController
public function generatePrimerDiploma($id)
    {
        try {
            $user = \App\Models\User::findOrFail($id);
            
            $pdf = Pdf::loadView('primer-diploma', compact('user'));
            
            $cleanName = preg_replace('/[^a-zA-Z0-9_-]/', '_', $user->name);

            $filename = 'diploma_' . $cleanName . '.pdf';

            $pdf->setPaper('Letter', 'landscape');
            
                return $pdf->download($filename);

            // return $pdf->stream($filename);
            
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al generar el diploma'], 500);
        }
    }
```
## Rutas

#### Ruta para vista del diploma
```
Route::get('/primer-diploma/{id}', [DiplomaController::class, 'show'])->name('primer-diploma');
```
Ejemplo: `localhost:8000/primer-diploma/1`
#### Ruta para generar PDF

```
Route::get('/generate-primer-diploma/{id}', [PdfController::class, 'generatePrimerDiploma'])->name('generate-primer-diploma');
```
Ejemplo: `localhost:8000/generate-primer-diploma/1`
## 👁️ Vista Blade del Diploma (`resources/views/diploma.blade.php`)

Esta vista se encarga de renderizar un diploma en formato HTML, preparado para convertir a PDF mediante herramientas como **Dompdf**.

### 📂 Ubicación sugerida

`resources/views/diploma.blade.php`

### ⚙️ Dinamismo

Utiliza interpolación de variables de Laravel para mostrar información dinámica del usuario:

```blade
{{ $user->name }}
{{ $user->documento_identidad }}
```

### Estructura General
 
| Sección                       | Descripción                                               |
| ----------------------------- | --------------------------------------------------------- |
| `body > .principal-container` | Contenedor principal que cubre toda la vista.             |
| `.contenedor-diploma`         | Sección envolvente del diploma completo.                  |
| Esquinas decorativas          | Cuatro imágenes en cada esquina que enmarcan el diploma.  |
| Logos institucionales         | Logotipos de la FESC y el Ministerio de Educación.        |
| `.contenido-principal`        | Área central del diploma donde se ubican los textos.      |
| `.contenido-diploma`          | Contenedor específico de contenido textual.               |
| Firma                         | Imagen escaneada de la firma y el texto con nombre/cargo. |

### Recursos gráficos
| Imagen                     | Propósito                   |
| -------------------------- | --------------------------- |
| `Right-top-corner.webp`    | Esquina superior derecha    |
| `Left-top-corner.webp`     | Esquina superior izquierda  |
| `Bottom-right-corner.webp` | Esquina inferior derecha    |
| `Bottom-left-corner.webp`  | Esquina inferior izquierda  |
| `LOGO_PROYECTANDO.webp`    | Logo de la FESC y proyecto  |
| `firma_ejemplo.png`        | Firma digital de la rectora |

Todas estas deben estar ubicadas en:

`public/images/`
---

## 🎨 Clases CSS y Finalidad

| Clase                         | Descripción |
|------------------------------|-------------|
| `.font-sans`                 | Fuente sans-serif moderna (`Arial`). |
| `.font-serif`                | Fuente con serifas tradicional (`Times`). |
| `.h-full`                    | Ocupa el 100% de la altura disponible. |
| `.principal-container`       | Contenedor principal del diploma. |
| `.contenedor-diploma`        | Estructura donde se renderiza todo. |
| `.esquina-*`                 | Posiciona esquinas decorativas. |
| `.logo-fesc-proyectando`     | Centra el logo superior de la FESC. |
| `.logo-mineducacion`         | Posiciona lateralmente el logo de MinEducación. |
| `.contenido-principal`       | Agrupa todo el contenido visible del diploma. |
| `.contenido-diploma`         | Sección que contiene textos y firma. |
| `.titulo-principal`          | Título del diploma. |
| `.certifican`                | Texto introductorio: “Certifican que…”. |
| `.nombre`                    | Nombre del participante. |
| `.documento`                 | Documento del participante. |
| `.asistio`                   | Introducción al evento. |
| `.nombre-evento`             | Nombre destacado del evento. |
| `.participacion`             | Lema o frase institucional. |
| `.fecha-realizacion`         | Fechas del evento y firma. |
| `.imagen-firma`              | Imagen escaneada de la firma. |
| `.contenedor-firma`          | Nombre y cargo de la persona firmante. |

## Autor
- Nick Ortega [OrtegaNidddd](https://github.com/OrtegaNidddd)

## Colaboradores
- Ing. Manuel Parada [CodeAlchemist151](https://github.com/CodeAlchemist151)

## PDF GENERADO DINÁMICAMENTE
<img width="767" height="591" alt="image" src="https://github.com/user-attachments/assets/15c3015a-024f-4f5d-9edd-8eb8a22de97e" />
