{{ Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}
{{ Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}
{{ Html::script('js/aos.js') }}
{{ Html::script('js/parsley.min.js') }}
{{ Html::script('js/script.js') }}
<script>
AOS.init({
  duration: 1400,
});
</script>
@yield('js')
