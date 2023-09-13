<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap">
  @foreach($books as $book)
  @php ($param['kitap'] = $book->name)
  @php ($param['yazar'] = $book->author)
  
  <url>
      <loc>{{ route('home.book', $param) }}</loc>
      <lastmod>{{ \Carbon\Carbon::parse($book->created_at)->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>0.9</priority>
  </url>
  @endforeach
</urlset>
