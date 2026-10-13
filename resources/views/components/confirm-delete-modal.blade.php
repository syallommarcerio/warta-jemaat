<div
    id="delete-confirmation-modal"
    class="fixed inset-0 z-[100] hidden items-center justify-center bg-gray-900/50 p-4 backdrop-blur-sm"
    role="dialog"
    aria-modal="true"
    aria-labelledby="delete-confirmation-title"
    aria-describedby="delete-confirmation-message"
>
    <div class="w-full max-w-md overflow-hidden rounded-2xl bg-white shadow-2xl ring-1 ring-black/5">
        <div class="p-6 sm:p-7">
            <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-red-50 text-red-600">
                <span class="material-symbols-outlined text-3xl" aria-hidden="true">delete</span>
            </div>

            <h2 id="delete-confirmation-title" class="text-center text-xl font-bold text-gray-900">
                Apakah Anda yakin?
            </h2>
            <p id="delete-confirmation-message" class="mt-2 text-center text-sm leading-6 text-gray-500">
                Data yang dihapus tidak dapat dipulihkan.
            </p>

            <div class="mt-7 flex flex-col-reverse gap-3 sm:flex-row sm:justify-center">
                <button
                    id="delete-confirmation-cancel"
                    type="button"
                    class="inline-flex min-h-11 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300"
                >
                    Batal
                </button>
                <button
                    id="delete-confirmation-submit"
                    type="button"
                    class="inline-flex min-h-11 items-center justify-center gap-2 rounded-lg bg-red-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                >
                    <span class="material-symbols-outlined text-lg" aria-hidden="true">delete</span>
                    Ya, Hapus
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('delete-confirmation-modal');
        const title = document.getElementById('delete-confirmation-title');
        const message = document.getElementById('delete-confirmation-message');
        const cancelButton = document.getElementById('delete-confirmation-cancel');
        const confirmButton = document.getElementById('delete-confirmation-submit');
        let pendingForm = null;
        let previousActiveElement = null;

        if (!modal || !cancelButton || !confirmButton) return;

        function closeModal() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            pendingForm = null;
            if (previousActiveElement) previousActiveElement.focus();
        }

        document.querySelectorAll('form[data-confirm-delete]').forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (form.dataset.confirmed === 'true') {
                    delete form.dataset.confirmed;
                    return;
                }

                event.preventDefault();
                pendingForm = form;
                previousActiveElement = document.activeElement;
                title.textContent = form.dataset.confirmTitle || 'Apakah Anda yakin?';
                message.textContent = form.dataset.confirmMessage || 'Data yang dihapus tidak dapat dipulihkan.';
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                cancelButton.focus();
            });
        });

        cancelButton.addEventListener('click', closeModal);

        confirmButton.addEventListener('click', function () {
            if (!pendingForm) return;
            const form = pendingForm;
            form.dataset.confirmed = 'true';
            confirmButton.disabled = true;
            confirmButton.classList.add('opacity-70', 'cursor-wait');
            form.requestSubmit();
            window.setTimeout(function () {
                confirmButton.disabled = false;
                confirmButton.classList.remove('opacity-70', 'cursor-wait');
                closeModal();
            }, 100);
        });

        modal.addEventListener('click', function (event) {
            if (event.target === modal) closeModal();
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });
    });
</script>
