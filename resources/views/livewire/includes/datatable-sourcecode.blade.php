&lt;div class="relative w-full"&gt;
&lt;div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"&gt;
 &lt;svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"&gt;
 &lt;path fill-rule="evenodd"
      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
 clip-rule="evenodd" /&gt;
    &lt;/svg&gt;
&lt;/div&gt;

&lt;input wire:model.live.debounce.300ms="search" type="text"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2"
    placeholder="Search" required=""&gt;

&lt;/div&gt;
&lt;/div&gt;

&lt;div class="flex space-x-3"&gt;
@@livewire('modal-product')
&lt;/div&gt;

&lt;div class="overflow-x-auto"&gt;
&lt;table class="w-full text-xs text-gray-500 border-collapse"&gt;
    &lt;thead class="text-xs text-gray-700 uppercase bg-gray-50 text-center"&gt;
        &lt;tr&gt;
            &lt;th scope="col" class="px-4 py-3"&gt;Name&lt;/th&gt;
            &lt;th scope="col" class="px-4 py-3"&gt;Category&lt;/th&gt;
            &lt;th scope="col" class="px-4 py-3"&gt;Size&lt;/th&gt;
            &lt;th scope="col" class="px-4 py-3"&gt;Price&lt;/th&gt;
            &lt;th scope="col" class="px-4 py-3"&gt;Stock&lt;/th&gt;
            &lt;th scope="col" class="px-4 py-3"&gt;Description&lt;/th&gt;
            &lt;th scope="col" class="px-4 py-3"&gt;Images&lt;/th&gt;
            &lt;th scope="col" class="px-4 py-3"&gt;Actions&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;



            &lt;tbody&gt;
@@foreach($products as $product)
&lt;tr wire:key="{{ @$product['id'] }}" class="border-b dark:border-gray-700 text-center"&gt;
&lt;td class="px-4 py-3 text-left"&gt;{{ @$product['name'] }}&lt;/td&gt;
&lt;td class="px-4 py-3 text-left"&gt;{{ @$product->category->name ?? 'No Category' }}&lt;/td&gt;
&lt;td class="px-4 py-3"&gt;{{ str_replace(['["', '"]'], '', @$product->size) }}&lt;/td&gt;
&lt;td class="px-4 py-3"&gt;{{ @$product['price'] }}&lt;/td&gt;
&lt;td class="px-4 py-3"&gt;{{ @$product['stock'] }}&lt;/td&gt;
&lt;td class="px-4 py-3 text-left"&gt;{{ @$product['description'] }}&lt;/td&gt;
&lt;td class="px-4 py-3"&gt;
@@php
$images = is_array($product['image']) ? $product['image'] : json_decode($product['image'], true);
@@endphp
@@if(is_array($images))
@@foreach($images as $image)
    &lt;img src="{{ asset('storage/' . @$image) }}" alt="Product Image" class="w-10 h-10 rounded mx-auto hover:scale-110 transition"&gt;
@@endforeach
@@else
&lt;img src="{{ asset('storage/' . @$product['image']) }}" alt="Product Image" class="w-10 h-10 rounded mx-auto hover:scale-110 transition"&gt;
@@endif
&lt;/td&gt;
&lt;td class="px-4 py-3 relative"&gt;
&lt;div x-data="{ open: false }" class="relative"&gt;
&lt;button @click="open = !open" class="px-3 py-1 text-gray-700 rounded relative z-40"&gt;
&lt;svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"&gt;
    &lt;path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" /&gt;
&lt;/svg&gt;
&lt;/button&gt;
&lt;div x-show="open" @click.away="open = false" x-transition x-cloak class="absolute right-0 w-15 bg-white border border-gray-300 shadow-md rounded-md z-50"&gt;
&lt;ul class="py-1 text-sm text-gray-700"&gt;
&lt;li&gt;
    &lt;a wire:navigate href="@{{ route('edit-product', @$product->id) }}" class="block px-4 py-2 hover:bg-gray-100"&gt;
        &lt;div class="flex justify-center py-2"&gt;
            &lt;svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"&gt;
                &lt;path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /&gt;
            &lt;/svg&gt;                                                              
        &lt;/div&gt;
    &lt;/a&gt;
&lt;/li&gt;
&lt;li&gt;
    &lt;button onclick="confirm('Are you sure you want to delete this product {{ @$product->id }} ?') ? '' : event.stopImmediatePropagation()" wire:click="delete({{ @$product->id }})" class="w-full text-left block px-4 py-2 text-red-600 hover:bg-gray-100"&gt;
        &lt;div class="flex justify-center py-2"&gt;
            &lt;svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"&gt;
                &lt;path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /&gt;
                  &lt;/svg&gt;
                 &lt;/div&gt;
              &lt;/button&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
     &lt;/div&gt;
&lt;/div&gt;
 &lt;/td&gt;
&lt;/tr&gt;
@@endforeach
&lt;/tbody&gt;




&lt;div class="py-4 px-3"&gt;
&lt;div class="flex"&gt;
    &lt;div class="flex space-x-4 items-center mb-3"&gt;
        &lt;label class="w-32 text-sm font-medium text-gray-900"&gt;Per Page&lt;/label&gt;
        &lt;select wire:model.live="perPage"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"&gt;
            &lt;option value="5"&gt;5&lt;/option&gt;
            &lt;option value="10"&gt;10&lt;/option&gt;
            &lt;option value="20"&gt;20&lt;/option&gt;
            &lt;option value="50"&gt;50&lt;/option&gt;
            &lt;option value="200"&gt;200&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
&lt;/div&gt;
@{{ $products->links() }}  
&lt;/div&gt;