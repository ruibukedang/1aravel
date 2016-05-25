@extends('index.layout')

@section('content')
<h1>hello, 1aravel</h1>
<div id="app">
  <ul>
    <li v-for="todo in todos">
      @{{ todo.text }}
    </li>
  </ul>
</div>
@endsection
@section('customer_js')
<script type="text/javascript">
    new Vue({
        el: '#app',
        data: {
            todos: [
             { text: 'Learn JavaScript' },
             { text: 'Learn Vue.js' },
             { text: 'Build Something Awesome' }
           ]
        }
    });
</script>
@endsection
