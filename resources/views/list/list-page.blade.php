{{-- viewedList  --}}
<!DOCTYPE html>
<html lang="en">
@include('main-components.head-tag', ['alt_title' => 'List'])
{{-- @section('title', 'List') --}}

<body>
    @include('main-components.top-nav')

    <div class="container-fluid">
        {{-- MODALS BELOW  --}}
        {{-- MODAL 1 for Editing the Link --}}
        @livewire('Linkeditingmodal')
        {{-- Modal 2 For Editing the List itself --}}
        @livewire('Listeditingmodal', ['theListId' => $theListId])
        <div class="row">
            @livewire('Listcontainer', ['theListId' => $theListId])
            @include('list.list-info-plus-form-section')
        </div>
    </div>
    @include('main-components.js-includes')
    <script>
        window.addEventListener('new-url-added', event => {
            Toastify({
                text: "Data Updated",
                close: true,
                duration: 3000,
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
            }).showToast();
        })

        window.addEventListener('edited-link', event => {
            $('#linkEditingModal').modal('hide');
            Toastify({
                text: "Data Updated",
                close: true,
                duration: 3000,
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
            }).showToast();
        })

        function myCopyFunction() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            // copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Link Copied";
        }

        function outFunc() {
            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copy to clipboard";
        }

        // linkDescToggler
        $(document).ready(function() {
            $(".linkDescToggler").click(function() {
                $(this).toggleClass("bg-warning");
            });
        });
        // ----------------------------
    </script>
</body>

</html>
