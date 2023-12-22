<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->description }}</p>
@endsection
    

<script>
    $(document).ready(function() {
    $('.article-title').click(function() {
        var title = $(this).text();
        var url = '/generate-slug';
        var data = {
            title: title,
        };

        $.ajax({
            url: url,
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function(response) {
                var slug = response.slug;
                var newUrl = '/articles/' + slug;
                window.location.href = newUrl;
            },
        });
    });
});

</script>
</body>
</html>