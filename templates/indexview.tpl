{include file="head.tpl"}
{include file="nav.tpl"}
{include file="banner.tpl"}

<main class="bg-gray-100 min-h-screen">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                {foreach from=$companies item=company}
                    <li>
                        <a href="/notes?userId={$company.id}" class="block bg-white rounded-lg shadow-md p-4 hover:bg-gray-100 transition duration-200">
                            <h3 class="text-lg font-semibold">{$company.name}</h3>
                            <!-- Add additional company details here if needed -->
                        </a>
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>
</main>

{include file="banner.tpl"}