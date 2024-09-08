<x-app-layout>
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">
            <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
            <div class="">
                <div class="grid grid-cols-4 gap-4 flex-wrap">
                {{-- 追加 --}}
                    @foreach($stocks as $stock)
                        <div class="mycart_box text-center rounded shadow-lg bg-white p-6">
                            {{$stock->name}} <br>
                            {{$stock->fee}}円<br>
                            <img src="/image/{{$stock->imagePath}}" alt="" class="incart" >
                            <br>
                            {{$stock->explain}} <br>
                        </div>
    
                    @endforeach
                {{-- ここまで --}}  
                </div>
                {{-- 追加 --}}
                <div class="text-center" style="width: 200px;margin: 20px auto;">
                    {{  $stocks->links()}} 
                </div>
                {{-- ここまで --}}  
            </div>
        </div>
    </div>
</x-app-layout>