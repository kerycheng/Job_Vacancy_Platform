<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">發佈職缺</h2>
      </header>
  
      <form method="POST" action="/example/public/listings" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
          <label for="company" class="inline-block text-lg mb-2">公司 / 店家名稱</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
            value="{{old('company')}}" />
  
          @error('company')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="title" class="inline-block text-lg mb-2">工作名稱</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
            placeholder="例：早班工讀、假日工讀" value="{{old('title')}}" />
  
          @error('title')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="location" class="inline-block text-lg mb-2">地址</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
            placeholder="例：台中市沙鹿區、雲林縣虎尾鎮" value="{{old('location')}}" />
  
          @error('location')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">
            聯絡Email
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
  
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="website" class="inline-block text-lg mb-2">
            公司 / 店家網址
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
            value="{{old('website')}}" />
  
          @error('website')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="tags" class="inline-block text-lg mb-2">
            關鍵字
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
            placeholder="例：假日班, 輪班, 短期" value="{{old('tags')}}" />
  
          @error('tags')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="logo" class="inline-block text-lg mb-2">
            公司 / 店家Logo
          </label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
  
          @error('logo')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="description" class="inline-block text-lg mb-2">
            工作內容
          </label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
            placeholder="例：公司福利、工作時間">{{old('description')}}</textarea>
  
          @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            發佈
          </button>
  
          <a href="/" class="text-black ml-4"> 返回 </a>
        </div>
      </form>
    </x-card>
</x-layout>