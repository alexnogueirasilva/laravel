<!doctype html>
<html>
  <head>
    <title>Scalar API Reference</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <script
      id="api-reference"
      data-url="{{ config('scalar.url') }}"></script>

    <!-- Optional: You can set a full configuration object like this: -->
    <script>
        var configuration = {!! json_encode(config('scalar.configuration')) !!}

        document.getElementById('api-reference').dataset.configuration =
            JSON.stringify(configuration)
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@scalar/api-reference"></script>
  </body>
</html>
