{include file="head.tpl"}
{include file="nav.tpl"}
{include file="banner.tpl"}

<main class="bg-gray-100 min-h-screen">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
    <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
  {foreach $notes as $note}
    <li class="bg-white rounded-lg shadow-md overflow-hidden">
      <a href="/note?id={$note.id}" class="block p-4 hover:bg-indigo-500 hover:text-white transition-colors duration-300">
        <span style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
          {$note.body}
        </span>
      </a>
    </li>
  {/foreach}
</ul>
        <p class="mt-6 text-center">
            <a href="/note/create" class="inline-block bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600 transition-colors duration-300">Add New Note</a>
        </p>
    </div>
</main>
{include file="footer.tpl"}