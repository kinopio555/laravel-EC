<x-app-layout>
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">
            <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
            <div class="">
                <div class="">
               {{-- 追加 --}}               
               @foreach($myCartStocks as $stock)
                    {{$stock->stockId}}<br>
                    {{$stock->userId}}<br>
               @endforeach
              {{-- ここまで --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>