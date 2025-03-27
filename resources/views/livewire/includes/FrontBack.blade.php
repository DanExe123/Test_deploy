  <!-- Front-End Code Column -->
      <div class="py-10"data-aos-duration="2000"  data-aos="fade-up">
        @verbatim
        <h2 class="text-lg font-bold mb-4">Front-End Code</h2>
        <div class=" cursor-pointer mockup-code w-full transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg" >
          <pre data-prefix="$"><code>
  &lt;h2&gt;Add Product&lt;/h2&gt;
  &lt;form wire:submit.prevent=&quot;save&quot;&gt;
      &lt;input class=&quot;font-bold text-black&quot; type=&quot;text&quot; wire:model=&quot;name&quot; placeholder=&quot;Product Name&quot; required&gt;
      &lt;textarea class=&quot;text-black font-bold&quot; wire:model=&quot;description&quot; placeholder=&quot;Product Description&quot;&gt;&lt;/textarea&gt;
      
      @foreach ($productAttributes as $attribute)
          &lt;label&gt;{{ $attribute->name }}&lt;/label&gt;
          
          @if ($attribute->name == 'Size')
              &lt;select class=&quot;font-bold text-black bg-white&quot; wire:model=&quot;values.{{ $attribute->id }}&quot;&gt;
                  &lt;option value=&quot;&quot;&gt;Select Size&lt;/option&gt;
                  &lt;option value=&quot;Small&quot;&gt;Small&lt;/option&gt;
                  &lt;option value=&quot;Medium&quot;&gt;Medium&lt;/option&gt;
                  &lt;option value=&quot;Large&quot;&gt;Large&lt;/option&gt;
                  &lt;option value=&quot;X-Large&quot;&gt;X-Large&lt;/option&gt;
              &lt;/select&gt;
          @else
              &lt;input class=&quot;font-bold text-black&quot; type=&quot;text&quot; wire:model=&quot;values.{{ $attribute->id }}&quot;&gt;
          @endif
      @endforeach
      
      &lt;button type=&quot;submit&quot;&gt;Save&lt;/button&gt;
  &lt;/form&gt;
  
  @if (session()-&gt;has('message'))
      &lt;p&gt;{{ session('message') }}&lt;/p&gt;
  @endif
          </code></pre>
        </div>
        @endverbatim
      </div>
      
      
    <!-- Back-End Code Column -->
    <div class="py-10 "data-aos-duration="2000"  data-aos="fade-up">
        @verbatim
        <h2 class="text-lg font-bold mb-4">Back-End Code</h2>
        <div class="cursor-pointer mockup-code w-full transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
          <pre data-prefix="$"><code>
  &lt;?php
  
  namespace App\Livewire;
  
  use Livewire\Component;
  use App\Models\Entity;
  use App\Models\Attribute;
  use App\Models\AttributeValues;
  
  class ProductManager extends Component
  {
      public $name, $description;
      public $productAttributes = []; // Store available attributes
      public $values = []; // Store input values for attributes
  
      public function mount()
      {
          // Fetch product attributes from the database
          $this->productAttributes = Attribute::where('entity_type', 'Product')->get();
      }
  
      public function save()
      {
          $product = Entity::create([
              'entity_type' => 'Product',
              'name' => $this->name,
              'description' => $this->description,
          ]);
      
          foreach ($this->values as $attributeId => $value) {
              AttributeValues::create([
                  'entity_id' => $product->id,
                  'attribute_id' => $attributeId,
                  'value' => $value,
              ]);
          }
      
          // Force component to reload attributes
          $this->productAttributes = Attribute::where('entity_type', 'Product')->get();
      
          $this->reset(['name', 'description', 'values']);
          session()->flash('message', 'Product added successfully.');
      }
  
      public function render()
      {
          return view('livewire.product-manager');
      }
  }
          </code></pre>
        </div>
        @endverbatim
      </div>
