<div
    class="mx-4 p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800"

    x-data="form()"
    >

    <h3 class="mb-4 text-xl font-semibold dark:text-white">@lang('modules.settings.aboutUsSettings')</h3>

    <form wire:submit="submitForm" x-data="{ content: @entangle('aboutUs').live }">
        <div class="grid gap-6">
            <input x-ref="aboutUs" id="aboutUs" name="aboutUs" wire:model="aboutUs" value="{{ $aboutUs }}" type="hidden" />

            <div wire:ignore class="border border-gray-300 rounded-md mt-2 dark:border-gray-700 dark:bg-gray-300 pt-2">
                <trix-editor class="trix-content text-sm border-l-0 border-r-0 border-t border-b-0 focus:ring-0 dark:text-gray-300 dark:bg-gray-800 dark:border-gray-600"  input="aboutUs" data-gramm="false" x-on:trix-change="$wire.aboutUs = $event.target.value" x-ref="trixEditor"></trix-editor>
            </div>
            <x-input-error for="aboutUs" class="mt-2" />

            <div>
                <x-button>@lang('app.save')</x-button>
            </div>
        </div>
    </form>

</div>
