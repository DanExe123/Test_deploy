<section id="livewire" class="mb-12" data-aos-duration="2000"  data-aos="fade-up">
    <h2 class="text-2xl font-bold mb-4">Livewire Functions</h2>
    <p class="text-gray-300">Here are some commonly used Livewire directives in frontend development:</p>
    
    <h3 class="text-xl font-semibold mt-6">Examples:</h3>
    
    <pre class="bg-gray-800 p-4 mt-4 rounded text-sm overflow-x-auto">&lt;!-- wire:poll - Automatically refreshes the component every 5 seconds --&gt;
&lt;div wire:poll.5s&gt;
Data updates every 5 seconds
&lt;/div&gt;</pre>

    <pre class="bg-gray-800 p-4 mt-4 rounded text-sm overflow-x-auto">&lt;!-- wire:prevent - Prevents the default form submission --&gt;
&lt;form wire:submit.prevent="save"&gt;
&lt;button type="submit"&gt;Save&lt;/button&gt;
&lt;/form&gt;</pre>

    <pre class="bg-gray-800 p-4 mt-4 rounded text-sm overflow-x-auto">&lt;!-- wire:ignore - Prevents Livewire from modifying this section --&gt;
&lt;div wire:ignore&gt;
&lt;input type="text" id="datepicker"&gt;
&lt;/div&gt;</pre>

    <pre class="bg-gray-800 p-4 mt-4 rounded text-sm overflow-x-auto">&lt;!-- wire:mode.live=bounces 5000ms - Debounces Livewire updates by 5 seconds --&gt;
&lt;input type="text" wire:model.live.debounce.5000ms="query" placeholder="Search..."&gt;</pre>

    <pre class="bg-gray-800 p-4 mt-4 rounded text-sm overflow-x-auto">&lt;!-- wire:navigate - Enables Livewire navigation --&gt;
&lt;a href="/dashboard" wire:navigate&gt;Go to Dashboard&lt;/a&gt;</pre>

    <pre class="bg-gray-800 p-4 mt-4 rounded text-sm overflow-x-auto">&lt;!-- wire:loading - Displays a loading indicator --&gt;
&lt;div wire:loading&gt;Loading...&lt;/div&gt;</pre>