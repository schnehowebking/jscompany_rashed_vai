<script>
  @if ( Session::get('success', false) )
      iziToast.success({
          position: "topRight",
          message: "{{Session::get('success')}}"
      });
  @elseif ( Session::get('error', false) )
      iziToast.error({
          position: "topRight",
          message: "{{Session::get('error')}}"
      });
  @elseif ( Session::get('warning', false) )
      iziToast.warning({
          position: "topRight",
          message: "{{Session::get('warning')}}"
      });
  @elseif ( Session::get('info', false) )
      iziToast.info({
          position: "topRight",
          message: "{{Session::get('info')}}"
      });
  @endif
    @foreach( session('toasts', collect())->toArray() as $toast)
      var options = {
          title: '{{ $toast['title'] }}',
          message: '{{ $toast['message'] }}',
          messageColor: '{{ $toast['messageColor'] }}',
          messageSize: '{{ $toast['messageSize'] }}',
          titleLineHeight: '{{ $toast['titleLineHeight'] }}',
          messageLineHeight: '{{ $toast['messageLineHeight'] }}',
          position: '{{ $toast['position'] }}',
          titleSize: '{{ $toast['titleSize'] }}',
          titleColor: '{{ $toast['titleColor'] }}',
          closeOnClick: '{{ $toast['closeOnClick'] }}',
      };

    var type = '{{  $toast["type"] }}';

    show(type, options);

    @endforeach
    function show(type, options) {
        if (type === 'info'){
            iziToast.info(options);
        }
        else if (type === 'success'){
            iziToast.success(options);
        }
        else if  (type === 'warning'){
            iziToast.warning(options);
        }
        else if (type === 'error'){
            iziToast.error(options);
        } else {
            iziToast.show(options);
        }

    }

    function notify(type, msg) {
      if (type === 'info'){
            iziToast.info({message: msg, position: 'topRight'});
        }
        else if (type === 'success'){
            iziToast.success({message: msg, position: 'topRight'});
        }
        else if  (type === 'warning'){
            iziToast.warning({message: msg, position: 'topRight'});
        }
        else if (type === 'error'){
            iziToast.error({message: msg, position: 'topRight'});
        } else {
            iziToast.show({message: msg, position: 'topRight'});
        }
    }
</script>

{{ session()->forget('toasts') }}
