@extends ('layouts.master')

@section ('content')
  @include('partials.footer')
@endsection

@section('script')
<script>
  alert("저는 자식 뷰의 'script' 섹션입니다.")
</script>
@endsection
