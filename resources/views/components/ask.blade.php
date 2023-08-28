
<section>
    <center>
        <h3 class="">{{$title}}</h3>
        <h6 class="text-white-50">{{$desc}}</h6>
    </center>

    <div class="container mt-4">

        @foreach ($items as $index => $item)
        <div class="ask_div @if ($index%2)
        ask_div2
        @endif  p-3 mt-2">
            <a class="ask_click" data-bs-toggle="collapse" href="#tab{{$index}}" role="button"
                aria-expanded="false" aria-controls="tab{{$index}}">
                {{$item['title']}}
            </a>
            <div class="collapse multi-collapse" id="tab{{$index}}">
                <div class="p-3 pb-0">
                    <div class="panel-body gray">
                        <p class="mb-0">{{$item['bode']}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        

    </div>

    </div>

</section>