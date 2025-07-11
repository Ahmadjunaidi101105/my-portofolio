<!DOCTYPE html>
<html lang="en" class="scroll-smooth">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmad Junaidi - Software Engineer</title>

    {{-- Google Fonts: Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- INI BAGIAN PALING PENTING --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
</head>

<body
    class="bg-gray-100 dark:bg-slate-900 text-slate-800 dark:text-slate-200 transition-colors duration-300 font-sans antialiased">
    {{-- ... (sisa kode body sama seperti sebelumnya) ... --}}
    <div class="container mx-auto p-4 lg:p-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-8">
            <aside class="col-span-12 lg:col-span-4">
                <div class="lg:sticky lg:top-8 space-y-6">
                    {{ $sidebar }}
                </div>
            </aside>
            <main class="col-span-12 lg:col-span-8 mt-6 lg:mt-0">
                <div class="space-y-6">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>

</html>