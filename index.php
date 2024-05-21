
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<style>
img[alt="www.000webhost.com"]{display:none};

body {
    margin: 0;
    padding: 0;
}
.banner-container {
    position: absolute;
    top: 2%; /* Adjust this value if necessary */
    left: 28%;
    transform: translateX(-50%);
    width: 728px;
    height: 103px;
}

</style> 
<body>
    
    
    
    <div id="content">
     <div class="banner-container">
        <a href="https://everve.net/ref/1652256/" target="_blank" title="Everve - Social Media Exchange on steroids by Everve"><img src="https://everve.net/pub/everve_468x60_advert_static_en.jpg" width="468" height="60" alt="Everve - Social Media Exchange on steroids by Everve" /></a>
    </div>   
        <!-- Konten dari URL yang diminta akan ditampilkan di sini -->
 
    
        <?php
        // Proxy Server URL
         
        $proxyServerUrl = 'https://kostenlosmov.000webhostapp.com';
        
        try {
            // Mendapatkan URL yang diminta oleh pengguna langsung dari parameter url $urlku = 'https://buybuygo.link/daftar-genre-bokep/'; 
          
            if(isset($_GET['url'])){
                $urlku = $_GET['url'];    
                $path = parse_url($urlku, PHP_URL_PATH); 
                $bagianPath = rtrim($path, '/');
            
                $requestedUrl = 'https://bokepono.world'.$bagianPath;
            } else {
                $requestedUrl = 'https://bokepono.world';    
            }
            
            // Mengambil konten dari URL yang diminta menggunakan file_get_contents()
            $response = @file_get_contents($requestedUrl);

            if ($response === FALSE) {
                throw new Exception('Gagal mengambil konten dari URL proxy server.');
            }

            // Menghapus skrip JavaScript kecuali yang berkaitan dengan jwplayer
            $modifiedResponse = preg_replace('/<script\b[^>]*>(?:(?!<\/script>).)*?(jwplayer).*?<\/script>/is', '<script>$1</script>', $response);

            // Mengganti semua link dalam konten dengan link dari proxy server
            $dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($modifiedResponse);

            $links = $dom->getElementsByTagName('a');

            foreach ($links as $link) {
                $oldUrl = $link->getAttribute('href');
                $newUrl = str_replace($requestedUrl, $proxyServerUrl, $oldUrl);
                 $nrludn = 'https://kostenlosmov.000webhostapp.com/playnew/index.php?url='.$newUrl;
                 $link->setAttribute('href', $nrludn);
            }

            // Mengambil konten yang telah dimodifikasi
            $modifiedResponse = $dom->saveHTML();
            echo $modifiedResponse;
        } catch (Exception $e) {
            // Menangkap dan menangani pengecualian
            echo 'Terjadi kesalahan: ' . $e->getMessage();
            exit(); // Menghentikan eksekusi skrip
        }
        ?>
    </div>

<script>
        document.addEventListener('DOMContentLoaded', function () {
            var searchForm = document.getElementById('searchform');
            if (searchForm) {
                searchForm.parentNode.removeChild(searchForm);
            }
        });
    </script>

</body>
</html>