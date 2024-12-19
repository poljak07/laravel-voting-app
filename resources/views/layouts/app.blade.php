<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Voting App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans text-gray-900 text-sm bg-gray-background">
    <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
        <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="174" height="39" fill="none" viewBox="0 0 174 39"><path fill="#2F2352" d="M50.203 20.282a19.28 19.28 0 0 0 0-2H12.254c-.008.166-.015.333-.019.5h-7.95l-.004.25H0v.5h4.28l.006.25h7.949c.004.168.01.334.02.5H23.15a8.07 8.07 0 0 1-.062-1h16c0 .339-.02.673-.062 1h11.176ZM50.124 17.282H38.837a7.945 7.945 0 0 0-.33-1H23.672c-.131.324-.242.657-.33 1H12.332c.018-.167.038-.334.06-.5h-7.95l.034-.244H0v-.5h4.555l.046-.256h7.95c.03-.167.064-.334.1-.5h37.156c.14.655.247 1.322.317 2ZM49.564 14.282h-12.23a8.052 8.052 0 0 0-.953-1H25.797c-.345.306-.665.64-.953 1h-11.95c.045-.167.093-.334.143-.5h-7.95l.088-.281H0V13h5.342l.078-.219h7.95c.06-.168.124-.334.19-.5h35.337c.258.65.481 1.318.667 2ZM48.467 11.282H13.99c.078-.168.158-.334.241-.5H6.282l.141-.276H0v-.5h6.694l.127-.224h7.95c.097-.168.197-.335.299-.5h32.317c.398.642.76 1.31 1.08 2ZM12.332 21.282h37.793c-.071.678-.178 1.346-.318 2H38.019c.185-.32.349-.654.489-1H23.67c.14.346.303.68.488 1H12.65a18.807 18.807 0 0 1-.1-.5H4.601a19.005 19.005 0 0 1-.047-.264H0v-.5h4.475a19.46 19.46 0 0 1-.033-.236h7.95a19.105 19.105 0 0 1-.06-.5ZM12.893 24.282h36.67c-.185.683-.408 1.35-.666 2H34.965a8.03 8.03 0 0 0 1.416-1H25.797a8.03 8.03 0 0 0 1.416 1H13.56a19.26 19.26 0 0 1-.19-.5H5.42l-.086-.241H0v-.5h5.168a19.174 19.174 0 0 1-.08-.259h7.949c-.05-.166-.098-.332-.144-.5ZM13.99 27.282h34.477a18.97 18.97 0 0 1-1.08 2H15.07a18.92 18.92 0 0 1-.3-.5H6.821c-.05-.086-.099-.172-.147-.259H0v-.5h6.405l-.123-.24h7.95a19.008 19.008 0 0 1-.242-.5ZM16.92 31.782c.147.17.298.336.452.5h27.713a19.095 19.095 0 0 0 1.637-2H15.735c.12.169.242.336.368.5h-7.95l.198.255H0v.5h8.76c.069.083.139.164.21.245h7.95ZM20.237 34.782c.243.173.49.34.74.5H41.48a19.081 19.081 0 0 0 2.594-2h-25.69c.185.17.374.337.566.5H11c.108.092.217.182.327.27H0v.5h11.972c.104.078.21.155.316.23h7.95ZM27.254 37.866c1.282.273 2.611.416 3.974.416 3.054 0 5.939-.72 8.495-2h-16.99c.356.178.717.345 1.084.5h-7.95c.142.06.285.119.428.176H0v.5h17.725c1.757.536 3.622.824 5.554.824 1.363 0 2.693-.143 3.975-.416ZM15.735 8.282h30.987a19.089 19.089 0 0 0-1.637-2H17.372c-.154.164-.305.33-.453.5H8.97l-.176.206H0v.5h8.382c-.077.097-.153.195-.228.294h7.949c-.126.165-.248.332-.368.5ZM18.383 5.282h25.69a19.078 19.078 0 0 0-2.593-2H20.977c-.25.161-.497.328-.74.5h-7.949c-.11.079-.22.158-.328.239H0v.5h11.316c-.106.086-.211.173-.315.261h7.949c-.192.163-.381.33-.567.5ZM22.734 2.282h16.99a18.92 18.92 0 0 0-8.495-2c-1.364 0-2.693.144-3.975.417a19.077 19.077 0 0 0-3.975-.417c-2.134 0-4.185.352-6.1 1H0v.5h23.817a18.89 18.89 0 0 0-1.083.5ZM111.248 0c.657 0 1.173.164 1.548.492.391.313.586.75.586 1.314 0 .563-.195 1.008-.586 1.336-.375.313-.891.47-1.548.47-.656 0-1.18-.157-1.571-.47-.375-.328-.563-.773-.563-1.336 0-.563.188-1 .563-1.314.391-.328.915-.492 1.571-.492ZM113.077 5.792v10.201c0 .657.11 1.103.329 1.337.234.235.625.352 1.172.352v.492a50.308 50.308 0 0 0-1.313-.047 34.428 34.428 0 0 0-1.806-.047c-.609 0-1.227.016-1.852.047a61.98 61.98 0 0 0-1.407.047v-.492c.547 0 .93-.117 1.149-.352.234-.234.352-.68.352-1.337V8.606c0-.703-.11-1.22-.329-1.547-.203-.344-.594-.516-1.172-.516V6.05c.5.047.985.07 1.454.07.656 0 1.266-.023 1.829-.07.578-.062 1.11-.148 1.594-.258Z"></path><path fill="#2F2352" fill-rule="evenodd" d="M119.677 7.944V5.792c-.484.11-1.016.196-1.594.258-.579.047-1.189.07-1.83.07-.469 0-.953-.023-1.454-.07v.493c.563 0 .954.172 1.173.516.219.328.328.844.328 1.547v11.726c0 .625-.109 1.047-.328 1.266-.203.219-.563.328-1.079.328v.493l1.243-.07a61.832 61.832 0 0 1 1.712-.024c.797 0 1.548.008 2.251.023.719.032 1.282.055 1.689.07v-.492c-.657 0-1.173-.125-1.548-.375-.375-.234-.563-.719-.563-1.454v-2.35c.206.172.448.314.727.427.5.22 1.055.329 1.665.329.829 0 1.571-.149 2.228-.446a4.54 4.54 0 0 0 1.712-1.313c.484-.594.852-1.321 1.102-2.181.266-.86.399-1.86.399-3.002 0-1.297-.188-2.376-.563-3.236-.375-.876-.876-1.524-1.501-1.946a3.63 3.63 0 0 0-2.134-.657c-.907 0-1.704.234-2.392.703-.541.365-.955.871-1.243 1.52Zm0 .806v8.501c.13.154.287.282.469.384.297.156.633.234 1.009.234.703 0 1.258-.234 1.665-.703.406-.485.695-1.157.867-2.017.188-.875.282-1.915.282-3.119 0-1.344-.086-2.4-.258-3.166-.172-.766-.407-1.313-.704-1.641-.297-.329-.656-.493-1.079-.493-.562 0-1.078.22-1.547.657-.353.34-.588.795-.704 1.363Z" clip-rule="evenodd"></path><path fill="#2F2352" d="M132.894 5.722c.657 0 1.227.086 1.712.258.5.156.86.313 1.079.469.531.36.86.125.985-.704h.492c-.031.438-.055.978-.07 1.618-.016.626-.024 1.462-.024 2.51h-.492a7.457 7.457 0 0 0-.446-1.712 3.398 3.398 0 0 0-.961-1.384c-.407-.36-.938-.54-1.595-.54-.453 0-.836.134-1.149.4-.313.25-.469.617-.469 1.102 0 .469.141.883.422 1.243.282.344.641.68 1.079 1.008.453.313.922.649 1.407 1.008.516.391.985.782 1.407 1.173a4.7 4.7 0 0 1 1.008 1.243c.251.453.376.992.376 1.618 0 .703-.204 1.32-.61 1.852-.407.516-.946.915-1.618 1.196-.657.282-1.392.423-2.204.423a5.23 5.23 0 0 1-1.267-.141 4.371 4.371 0 0 1-.938-.352c-.203-.094-.399-.18-.586-.258a4.57 4.57 0 0 0-.493-.234c-.156-.047-.297.007-.422.164-.109.156-.195.375-.258.656h-.492c.031-.5.055-1.11.07-1.829.016-.719.024-1.673.024-2.86h.492c.094.844.266 1.594.516 2.25.25.642.586 1.15 1.008 1.525.438.36.985.54 1.642.54.266 0 .524-.055.774-.165.25-.11.453-.29.61-.54.172-.25.258-.57.258-.96 0-.689-.227-1.26-.681-1.713-.437-.453-1-.946-1.688-1.477-.5-.407-.977-.805-1.43-1.196a6.009 6.009 0 0 1-1.079-1.313 3.203 3.203 0 0 1-.422-1.642c0-.703.187-1.297.562-1.782a3.345 3.345 0 0 1 1.478-1.079 5.316 5.316 0 0 1 1.993-.375ZM162.005 5.98c-.407-.172-.938-.258-1.595-.258a4.39 4.39 0 0 0-2.11.516c-.641.328-1.149.883-1.525 1.665v-2.11c-.484.109-1.016.195-1.594.257-.563.047-1.173.07-1.829.07-.469 0-.954-.023-1.454-.07v.493c.578 0 .969.172 1.172.516.219.328.328.844.328 1.547v7.387c0 .657-.117 1.103-.351 1.337-.219.235-.602.352-1.149.352v.492a61.98 61.98 0 0 1 1.407-.047 36.71 36.71 0 0 1 1.829-.047c.547 0 1.079.016 1.594.047.532.016.923.032 1.173.047v-.492c-.406 0-.696-.117-.868-.352-.172-.234-.258-.68-.258-1.337V9.474c0-.516.102-.977.305-1.384.219-.422.5-.75.844-.984a1.96 1.96 0 0 1 1.126-.352c.36 0 .625.086.797.258.188.156.313.383.376.68.062.281.093.617.093 1.008v7.293c0 .657-.086 1.103-.258 1.337-.156.235-.445.352-.867.352v.492c.281-.015.695-.031 1.243-.047a29.235 29.235 0 0 1 3.33 0c.578.016 1.008.032 1.289.047v-.492c-.5 0-.852-.117-1.055-.352-.203-.234-.305-.68-.305-1.337V9.578l-.001-.073-.004-.237a3.34 3.34 0 0 1 .31-1.13c.219-.423.5-.759.844-1.009.344-.25.72-.375 1.126-.375.406 0 .704.086.891.258.203.156.336.383.399.68.078.281.117.617.117 1.008v7.293c0 .657-.086 1.103-.258 1.337-.156.235-.445.352-.868.352v.492c.282-.015.696-.031 1.243-.047a29.235 29.235 0 0 1 1.665-.047c.579 0 1.165.016 1.759.047.594.016 1.04.032 1.337.047v-.492c-.547 0-.938-.117-1.173-.352-.219-.234-.328-.68-.328-1.337V9.685c0-.782-.055-1.407-.164-1.876-.11-.485-.289-.875-.54-1.172-.25-.282-.578-.5-.985-.657-.406-.172-.938-.258-1.594-.258-.797 0-1.548.164-2.251.492-.674.322-1.22.936-1.639 1.842a4.535 4.535 0 0 0-.05-.247c-.109-.485-.289-.875-.539-1.172-.25-.282-.579-.5-.985-.657ZM150.058 15.618V5.792c-.485.11-1.016.196-1.595.258-.562.047-1.172.07-1.829.07-.469 0-.953-.023-1.454-.07v.493c.579 0 .97.172 1.173.516.219.328.328.844.328 1.547v6.144c0 .516-.109.985-.328 1.407a2.474 2.474 0 0 1-.821.962 1.886 1.886 0 0 1-1.126.352c-.39 0-.687-.079-.891-.235a1.338 1.338 0 0 1-.422-.703 5.087 5.087 0 0 1-.094-1.032V5.792c-.484.11-1.016.196-1.594.258-.563.047-1.173.07-1.829.07-.469 0-.954-.023-1.454-.07v.493c.578 0 .969.172 1.172.516.219.328.328.844.328 1.547v5.933c0 .766.055 1.392.165 1.876.109.485.297.876.562 1.173.235.266.555.485.962.657.406.171.938.258 1.595.258.813 0 1.547-.165 2.204-.493.672-.344 1.196-.907 1.571-1.688v2.11a9.984 9.984 0 0 1 1.595-.258c.563-.047 1.172-.07 1.829-.07.485 0 .969.023 1.454.07v-.492c-.563 0-.954-.164-1.173-.493-.219-.344-.328-.867-.328-1.57Z"></path><path fill="#2F2352" fill-rule="evenodd" d="M104.696 6.355c-.86-.422-1.861-.633-3.002-.633-1.11 0-2.103.211-2.978.633-.86.422-1.54 1.102-2.04 2.04-.485.938-.728 2.181-.728 3.729s.243 2.79.727 3.729c.5.922 1.18 1.594 2.04 2.016.876.422 1.869.634 2.979.634 1.141 0 2.142-.212 3.002-.634.859-.422 1.532-1.094 2.016-2.016.485-.938.727-2.181.727-3.729s-.242-2.79-.727-3.729c-.484-.938-1.157-1.618-2.016-2.04Zm-4.573 1.243c.422-.938.946-1.407 1.571-1.407.641 0 1.165.469 1.571 1.407.422.922.633 2.431.633 4.526 0 2.095-.211 3.604-.633 4.526-.406.922-.93 1.384-1.571 1.384-.625 0-1.149-.462-1.571-1.384-.422-.922-.633-2.431-.633-4.526 0-2.095.21-3.604.633-4.526ZM88.301 22.583c-.97 0-1.837-.086-2.603-.258-.75-.156-1.344-.406-1.782-.75-.422-.329-.633-.735-.633-1.22s.218-.922.656-1.313c.438-.375 1.087-.672 1.947-.891l.21.375a2.412 2.412 0 0 0-.656.75c-.125.282-.188.571-.188.868 0 .657.297 1.157.892 1.5.61.36 1.43.54 2.462.54.703 0 1.329-.094 1.876-.281.563-.188 1-.47 1.313-.844.329-.376.493-.837.493-1.384 0-.469-.172-.868-.516-1.196-.344-.313-1.032-.469-2.064-.469h-1.454c-.64 0-1.204-.07-1.688-.211-.47-.14-.837-.36-1.103-.657-.265-.312-.398-.703-.398-1.172 0-.657.258-1.235.774-1.736.404-.392.962-.765 1.674-1.118a6.087 6.087 0 0 1-1.37-.335c-.703-.266-1.258-.673-1.664-1.22-.407-.547-.61-1.25-.61-2.11 0-.86.203-1.564.61-2.111.406-.563.961-.97 1.665-1.22.703-.265 1.5-.398 2.391-.398.892 0 1.689.133 2.392.399.464.164.862.397 1.197.697.199-.287.441-.543.726-.768.532-.406 1.103-.61 1.712-.61.5 0 .876.141 1.126.423.266.265.399.617.399 1.055 0 .469-.126.82-.376 1.055-.25.22-.531.329-.844.329a1.18 1.18 0 0 1-.75-.282c-.22-.188-.344-.469-.375-.844-.027-.336.067-.752.282-1.25-.456.194-.808.415-1.056.664a3.065 3.065 0 0 0-.486.605c.038.047.075.096.11.145.407.547.61 1.25.61 2.11 0 .86-.203 1.564-.61 2.111-.406.547-.961.954-1.665 1.22-.703.265-1.5.398-2.392.398a8.5 8.5 0 0 1-.4-.009c-.211.143-.414.295-.608.455a.978.978 0 0 0-.375.797c0 .5.313.75.938.75h2.556c.86 0 1.626.102 2.298.305.688.204 1.227.54 1.618 1.009.407.453.61 1.047.61 1.782 0 .766-.25 1.477-.75 2.134-.485.657-1.235 1.18-2.252 1.571-1.016.407-2.306.61-3.869.61Zm.234-9.826c.423 0 .75-.234.985-.703.235-.485.352-1.353.352-2.603 0-1.251-.117-2.111-.352-2.58-.234-.485-.562-.727-.984-.727-.407 0-.735.242-.985.727-.235.469-.352 1.329-.352 2.58 0 1.25.117 2.118.352 2.603.25.469.578.703.984.703ZM80.247 6.355c-.86-.422-1.86-.633-3.001-.633-1.11 0-2.103.211-2.978.633-.86.422-1.54 1.102-2.04 2.04-.485.938-.728 2.181-.728 3.729s.243 2.79.727 3.729c.5.922 1.18 1.594 2.04 2.016.876.422 1.869.634 2.979.634 1.141 0 2.142-.212 3.001-.634.86-.422 1.532-1.094 2.017-2.016.485-.938.727-2.181.727-3.729s-.242-2.79-.727-3.729c-.484-.938-1.157-1.618-2.017-2.04Zm-4.573 1.243c.423-.938.946-1.407 1.572-1.407.64 0 1.164.469 1.57 1.407.423.922.634 2.431.634 4.526 0 2.095-.211 3.604-.633 4.526-.407.922-.93 1.384-1.571 1.384-.626 0-1.15-.462-1.572-1.384-.422-.922-.633-2.431-.633-4.526 0-2.095.211-3.604.633-4.526Z" clip-rule="evenodd"></path><path fill="#2F2352" d="M65.184 1.571v.47c-.531.015-.938.077-1.219.187a.845.845 0 0 0-.54.563c-.093.265-.14.688-.14 1.266V15.97c0 .484.031.844.094 1.079.078.234.219.39.422.469.219.078.54.117.961.117h1.15c.53 0 1.031-.125 1.5-.375.47-.25.891-.602 1.266-1.056a6.326 6.326 0 0 0 .939-1.665c.25-.64.437-1.352.562-2.134h.54c-.047.532-.07 1.22-.07 2.064 0 .36.007.883.023 1.571s.062 1.4.14 2.134a69.417 69.417 0 0 0-2.696-.047c-1-.015-1.892-.023-2.674-.023h-1.5c-.61 0-1.267.008-1.97.023-.704 0-1.415.008-2.134.024-.72 0-1.4.008-2.04.023v-.469c.5-.031.875-.094 1.125-.187.25-.094.414-.282.493-.563.093-.282.14-.704.14-1.267V4.057c0-.579-.047-1-.14-1.266a.783.783 0 0 0-.516-.563c-.25-.11-.618-.172-1.102-.188v-.469a102.126 102.126 0 0 0 3.705.07c.688 0 1.36-.007 2.016-.023.673-.016 1.228-.031 1.665-.047Z"></path><path fill="#2F2352" fill-rule="evenodd" d="M169.871 37.553c-.033-.168-.011-.387.068-.657l3.303-11.967a9.558 9.558 0 0 1-1.635.505c-.573.113-1.23.174-1.972.186l-.118.354c.551 0 .894.09 1.029.27.134.18.151.46.05.842l-.782 2.949a.884.884 0 0 0-.246-.37c-.191-.18-.455-.27-.792-.27-.674 0-1.298.152-1.871.455a5.802 5.802 0 0 0-1.534 1.214 7.424 7.424 0 0 0-1.163 1.652 9.317 9.317 0 0 0-.725 1.837 6.35 6.35 0 0 0-.253 1.686c0 .539.085.983.253 1.331.169.337.399.59.691.758.292.158.618.236.978.236.55 0 1.045-.162 1.483-.488.438-.337.848-.854 1.231-1.551.16-.284.321-.603.481-.957l-.111.418a5.07 5.07 0 0 0-.202 1.011c-.022.292 0 .54.068.742.134.55.55.826 1.247.826.258 0 .522-.051.792-.152s.522-.275.758-.523c.248-.247.444-.6.59-1.062l.405-1.23h-.32l-.27.758c-.202.574-.393.961-.573 1.163-.169.192-.343.287-.523.287-.191 0-.303-.084-.337-.253Zm-.899-4.34c-.127.411-.265.802-.415 1.171-.281.72-.579 1.338-.894 1.855-.303.505-.601.898-.893 1.18-.292.269-.551.404-.775.404-.214 0-.371-.101-.472-.303-.09-.214-.135-.534-.135-.961 0-.607.067-1.225.202-1.854.135-.64.32-1.253.556-1.837a8.937 8.937 0 0 1 .809-1.568c.304-.472.624-.843.961-1.113.348-.27.691-.404 1.028-.404.225 0 .405.079.54.236.094.102.166.25.216.446l-.728 2.748Z" clip-rule="evenodd"></path><path fill="#2F2352" d="M158.655 38.328h-2.073l2.022-7.264c.102-.337.135-.573.102-.708-.034-.135-.135-.202-.304-.202-.213 0-.41.107-.59.32-.18.213-.365.59-.556 1.13l-.287.791h-.32l.438-1.264c.158-.45.354-.797.59-1.045.236-.258.495-.438.776-.539.281-.101.567-.152.859-.152.36 0 .624.073.792.22.18.146.293.337.338.573a2.2 2.2 0 0 1 .033.775c-.022.27-.067.534-.135.792l-.271 1.057.069-.18c.315-.798.618-1.433.91-1.905.304-.483.624-.826.961-1.028a2.09 2.09 0 0 1 1.096-.304c.404 0 .713.118.927.354.225.236.337.528.337.877 0 .28-.068.545-.202.792a1.65 1.65 0 0 1-.54.573c-.213.135-.46.202-.741.202-.281 0-.506-.073-.675-.219-.157-.146-.236-.36-.236-.64 0-.248.057-.472.169-.675a1.58 1.58 0 0 1 .438-.505c.18-.146.377-.247.59-.304a.206.206 0 0 0-.084-.05.376.376 0 0 0-.118-.017c-.247 0-.5.09-.759.27-.258.168-.528.444-.809.826-.281.382-.567.887-.859 1.516a24.749 24.749 0 0 0-.877 2.276c-.127.374-.255.776-.383 1.207l-.628 2.45Z"></path><path fill="#2F2352" fill-rule="evenodd" d="m152.357 35.724-.071.262a6.84 6.84 0 0 0-.219 1.163c-.034.36.022.663.168.91.225.337.607.506 1.146.506.259 0 .517-.051.776-.152.269-.101.522-.275.758-.523.236-.258.433-.618.59-1.078l.422-1.23h-.321l-.253.758c-.202.584-.398.972-.589 1.163-.191.19-.377.286-.557.286-.146 0-.241-.045-.286-.135a.883.883 0 0 1-.034-.354 2.61 2.61 0 0 1 .101-.421l2.175-7.484a7.269 7.269 0 0 1-1.029.169c-.348.034-.724.056-1.129.067l-.244.902a1.391 1.391 0 0 0-.194-.649.972.972 0 0 0-.877-.489c-.494 0-.988.152-1.483.455a6.06 6.06 0 0 0-1.399 1.214 9.414 9.414 0 0 0-1.18 1.685 9.626 9.626 0 0 0-.792 1.905 6.425 6.425 0 0 0-.286 1.837c0 .63.146 1.135.438 1.517.292.371.741.556 1.348.556.427 0 .837-.123 1.231-.37.404-.248.786-.658 1.146-1.23.223-.345.437-.758.644-1.24Zm-1.453 1.711c-.259.236-.489.354-.691.354-.169 0-.298-.084-.388-.253-.079-.18-.118-.477-.118-.893 0-.596.067-1.208.202-1.837.135-.63.315-1.236.54-1.82.236-.585.494-1.107.775-1.568.281-.46.562-.826.843-1.096.292-.27.567-.404.826-.404.269 0 .46.135.573.404.112.244.141.571.087.98l-.498 1.842.057-.293c-.18.719-.394 1.382-.641 1.989a10.67 10.67 0 0 1-.775 1.567c-.27.438-.534.781-.792 1.028ZM145.284 36.896c-.079.27-.101.489-.067.657.033.169.146.253.337.253.18 0 .354-.095.522-.286.18-.203.371-.59.573-1.164l.27-.758h.32l-.404 1.23c-.146.461-.343.815-.59 1.062a2.05 2.05 0 0 1-.759.523 2.242 2.242 0 0 1-.792.152c-.696 0-1.112-.276-1.247-.826a1.897 1.897 0 0 1-.067-.742c.022-.292.089-.63.202-1.011l.111-.418c-.161.354-.322.673-.482.957-.382.697-.792 1.214-1.23 1.55a2.426 2.426 0 0 1-1.484.49c-.359 0-.685-.08-.977-.236a1.747 1.747 0 0 1-.691-.759c-.169-.348-.253-.792-.253-1.331 0-.517.084-1.08.253-1.686.168-.618.41-1.23.724-1.837a7.457 7.457 0 0 1 1.163-1.652c.461-.506.972-.91 1.534-1.214a3.938 3.938 0 0 1 1.871-.455c.337 0 .601.09.792.27.11.097.193.22.247.37l.781-2.949c.102-.382.085-.663-.05-.843-.135-.18-.478-.27-1.028-.27l.118-.353a11.228 11.228 0 0 0 1.972-.186 9.558 9.558 0 0 0 1.635-.505l-3.304 11.967Zm-1.382-2.512c.15-.37.289-.76.415-1.171l.729-2.748a1.035 1.035 0 0 0-.217-.446.675.675 0 0 0-.539-.236c-.337 0-.68.135-1.028.404-.338.27-.658.641-.961 1.113a8.87 8.87 0 0 0-.809 1.567 10.802 10.802 0 0 0-.556 1.838 8.824 8.824 0 0 0-.203 1.854c0 .427.045.747.135.96.101.203.259.304.472.304.225 0 .483-.135.775-.405.293-.28.59-.674.894-1.18a11.99 11.99 0 0 0 .893-1.854Z" clip-rule="evenodd"></path><path fill="#2F2352" d="M129.294 38.328h2.073l.195-.762-.01.055c.214-.787.455-1.545.725-2.276a25.89 25.89 0 0 1 .876-2.056c.304-.63.607-1.18.911-1.652.303-.472.595-.837.876-1.096.281-.27.539-.404.775-.404.191 0 .309.067.354.202a.92.92 0 0 1 .017.472 4.43 4.43 0 0 1-.135.54l-1.533 4.635c-.158.472-.248.876-.27 1.213-.023.337.039.613.185.826.113.169.27.298.472.388.214.1.467.152.759.152.269 0 .539-.051.809-.152.281-.09.539-.259.775-.506.247-.247.45-.607.607-1.079l.421-1.23h-.32l-.27.758c-.213.585-.415.972-.606 1.163-.18.192-.354.287-.523.287-.18 0-.292-.073-.337-.22-.045-.156-.017-.387.084-.69l1.652-4.956c.146-.438.219-.848.219-1.23.011-.393-.095-.708-.32-.944-.214-.247-.596-.37-1.146-.37-.416 0-.815.09-1.197.269-.382.18-.753.494-1.112.944-.36.438-.731 1.034-1.113 1.786a20.73 20.73 0 0 0-.697 1.551l.562-2.191c.068-.27.118-.54.152-.809.034-.28.022-.534-.034-.759a.963.963 0 0 0-.387-.573c-.191-.146-.472-.219-.843-.219-.45 0-.86.124-1.231.371-.37.247-.674.702-.91 1.365l-.438 1.264h.32l.287-.792c.202-.55.387-.927.556-1.129.18-.213.376-.32.59-.32.157 0 .253.045.287.135.044.09.056.202.033.337a3.88 3.88 0 0 1-.101.438l-2.039 7.264Z"></path><path fill="#2F2352" fill-rule="evenodd" d="m124.998 35.986.071-.262a8.449 8.449 0 0 1-.644 1.24c-.36.572-.742.983-1.147 1.23-.393.247-.803.37-1.23.37-.607 0-1.056-.185-1.348-.556-.293-.382-.439-.887-.439-1.517 0-.584.096-1.196.287-1.837a9.626 9.626 0 0 1 .792-1.905 9.363 9.363 0 0 1 1.18-1.685 6.06 6.06 0 0 1 1.399-1.214c.494-.303.989-.455 1.483-.455.382 0 .674.163.877.49.108.167.173.383.194.648l.244-.902c.404-.011.781-.033 1.129-.067.36-.034.702-.09 1.028-.169L126.7 36.88a2.508 2.508 0 0 0-.101.421.883.883 0 0 0 .034.354c.045.09.14.135.286.135.18 0 .365-.095.556-.286.191-.191.388-.58.59-1.163l.253-.759h.32l-.421 1.23c-.157.461-.354.82-.59 1.08a2.054 2.054 0 0 1-.758.522 2.118 2.118 0 0 1-.776.152c-.539 0-.921-.169-1.146-.506-.146-.247-.202-.55-.168-.91a6.84 6.84 0 0 1 .219-1.163Zm-2.074 1.803c.203 0 .433-.118.692-.354.258-.247.522-.59.792-1.028.269-.438.528-.96.775-1.567s.461-1.27.641-1.99l-.057.294.498-1.841c.053-.41.024-.737-.087-.98-.113-.27-.304-.405-.574-.405-.258 0-.533.135-.825.404-.281.27-.562.635-.843 1.096-.281.46-.54.983-.776 1.567a12.267 12.267 0 0 0-.539 1.82 8.747 8.747 0 0 0-.202 1.838c0 .416.039.714.118.893.09.169.219.253.387.253Z" clip-rule="evenodd"></path><path fill="#2F2352" d="m121.43 29.968.051-.337h-2.008l.794-2.764a6.766 6.766 0 0 1-1.011.169c-.348.033-.725.056-1.129.067l-.725 2.528h-1.534l-.084.337h1.522l-1.725 6.018c-.146.494-.196.938-.151 1.331.056.382.213.686.472.91.269.225.657.338 1.163.338.573 0 1.067-.152 1.483-.456.416-.303.742-.803.978-1.5l.337-1.011h-.321l-.252.691c-.203.562-.427.955-.675 1.18-.236.225-.472.337-.708.337a.607.607 0 0 1-.488-.22c-.113-.145-.124-.375-.034-.69l1.991-6.928h2.054ZM115.848 26.277c-.112.292-.264.72-.455 1.281-.18.55-.359 1.27-.539 2.157h-.337c.033-.157.056-.32.067-.488a3.39 3.39 0 0 0 .034-.455c0-.439-.09-.82-.27-1.146a1.8 1.8 0 0 0-.792-.793c-.348-.202-.798-.303-1.348-.303-.596 0-1.102.157-1.517.472-.416.303-.624.792-.624 1.466 0 .416.095.81.286 1.18.203.36.456.714.759 1.062.315.337.646.68.994 1.028.349.337.675.686.978 1.045.303.36.551.742.742 1.146.202.394.303.826.303 1.298 0 .596-.146 1.107-.438 1.534a3.43 3.43 0 0 1-1.096 1.028 5.38 5.38 0 0 1-1.466.573 5.997 5.997 0 0 1-1.517.203c-.506 0-.927-.04-1.264-.118a2.96 2.96 0 0 1-.826-.287 35.209 35.209 0 0 1-.658-.37.999.999 0 0 0-.337-.186.65.65 0 0 0-.252-.068c-.147 0-.27.073-.371.22a4.32 4.32 0 0 0-.337.69h-.338a16.23 16.23 0 0 0 .692-2.106c.134-.517.286-1.163.455-1.939h.337a9.945 9.945 0 0 0-.118.674c-.034.225-.045.45-.034.675.034.786.275 1.393.725 1.82.461.427 1.135.64 2.022.64.753 0 1.321-.157 1.703-.471.382-.326.573-.798.573-1.416 0-.472-.09-.9-.27-1.281a4.411 4.411 0 0 0-.674-1.096 18.593 18.593 0 0 0-.893-.994 18.155 18.155 0 0 1-.894-.995 5.242 5.242 0 0 1-.691-1.112 3.28 3.28 0 0 1-.269-1.349c0-.561.118-1.05.354-1.466a3.31 3.31 0 0 1 .943-1.028 4.21 4.21 0 0 1 1.298-.624 4.72 4.72 0 0 1 1.399-.219c.607 0 1.107.073 1.5.22.394.145.731.32 1.012.522l.32.202c.101.045.18.067.236.067.157 0 .343-.297.556-.893h.337Z"></path><path fill="#2F2352" fill-rule="evenodd" d="M99.578 37.553c-.034-.168-.011-.387.068-.657l3.303-11.967a9.558 9.558 0 0 1-1.635.505c-.573.113-1.23.174-1.972.186l-.118.354c.55 0 .894.09 1.028.27.135.18.152.46.051.842l-.782 2.949a.883.883 0 0 0-.246-.37c-.191-.18-.455-.27-.792-.27-.675 0-1.298.152-1.871.455a5.8 5.8 0 0 0-1.534 1.214 7.424 7.424 0 0 0-1.163 1.652 9.31 9.31 0 0 0-.725 1.837 6.325 6.325 0 0 0-.253 1.686c0 .539.085.983.253 1.331.169.337.399.59.691.758.292.158.618.236.978.236.55 0 1.045-.162 1.483-.488.438-.337.848-.854 1.23-1.551.16-.284.321-.603.482-.957l-.11.418a5.01 5.01 0 0 0-.203 1.011 1.9 1.9 0 0 0 .067.742c.135.55.55.826 1.248.826.258 0 .522-.051.792-.152s.522-.275.758-.523c.248-.247.444-.6.59-1.062l.405-1.23h-.32l-.27.758c-.202.574-.393.961-.573 1.163-.169.192-.343.287-.523.287-.19 0-.303-.084-.337-.253Zm-.9-4.34c-.126.411-.264.802-.415 1.171-.28.72-.578 1.338-.893 1.855-.303.505-.601.898-.893 1.18-.292.269-.55.404-.776.404-.213 0-.37-.101-.471-.303-.09-.214-.135-.534-.135-.961 0-.607.067-1.225.202-1.854.135-.64.32-1.253.556-1.837a8.91 8.91 0 0 1 .81-1.568c.303-.472.623-.843.96-1.113.348-.27.691-.404 1.028-.404.225 0 .405.079.54.236.094.102.166.25.216.446l-.729 2.748Z" clip-rule="evenodd"></path><path fill="#2F2352" d="M85.728 38.328h-2.073l2.04-7.264c.045-.157.078-.303.1-.438a.545.545 0 0 0-.033-.337c-.034-.09-.13-.135-.287-.135-.213 0-.41.107-.59.32-.168.202-.354.579-.556 1.13l-.286.791h-.32l.438-1.264c.236-.663.54-1.118.91-1.365.37-.247.78-.37 1.23-.37.371 0 .652.072.843.218a.963.963 0 0 1 .388.573c.056.225.067.478.034.759a6.84 6.84 0 0 1-.152.809l-.562 2.192c.238-.589.47-1.105.697-1.552.382-.752.752-1.348 1.112-1.786.36-.45.73-.764 1.112-.944.383-.18.781-.27 1.197-.27.55 0 .933.124 1.146.371.225.236.332.55.32.944 0 .382-.072.792-.219 1.23l-1.651 4.956c-.102.303-.13.534-.085.69.045.147.158.22.338.22.168 0 .342-.095.522-.286.191-.192.393-.58.607-1.164l.27-.758h.32l-.422 1.23c-.157.472-.36.832-.606 1.08a1.854 1.854 0 0 1-.776.505 2.29 2.29 0 0 1-.809.152c-.292 0-.545-.051-.758-.152-.203-.09-.36-.22-.472-.388-.146-.213-.208-.489-.186-.826.023-.337.113-.741.27-1.213l1.534-4.635c.056-.18.101-.36.135-.54a.923.923 0 0 0-.017-.472c-.045-.135-.163-.202-.354-.202-.236 0-.495.135-.775.404-.281.259-.574.624-.877 1.096a15.614 15.614 0 0 0-.91 1.652c-.303.63-.596 1.314-.877 2.056-.27.73-.51 1.489-.724 2.276l.01-.055-.196.762Z"></path><path fill="#2F2352" fill-rule="evenodd" d="m79.43 35.724-.07.262a6.972 6.972 0 0 0-.22 1.163c-.034.36.022.663.168.91.225.337.607.506 1.147.506a2.115 2.115 0 0 0 1.534-.675c.236-.258.432-.618.59-1.078l.42-1.23h-.32l-.252.758c-.203.584-.4.972-.59 1.163-.191.19-.377.286-.556.286-.147 0-.242-.045-.287-.135a.885.885 0 0 1-.034-.354c.023-.146.056-.286.102-.421l2.174-7.484a7.265 7.265 0 0 1-1.028.169c-.349.034-.725.056-1.13.067l-.244.902a1.396 1.396 0 0 0-.194-.649.972.972 0 0 0-.876-.489c-.495 0-.99.152-1.484.455-.494.304-.96.708-1.399 1.214a9.368 9.368 0 0 0-1.18 1.685 9.627 9.627 0 0 0-.792 1.905 6.427 6.427 0 0 0-.286 1.837c0 .63.146 1.135.438 1.517.292.371.742.556 1.348.556.427 0 .838-.123 1.23-.37.405-.248.788-.658 1.147-1.23.223-.345.437-.758.644-1.24Zm-1.453 1.711c-.258.236-.489.354-.691.354-.169 0-.298-.084-.388-.253-.078-.18-.118-.477-.118-.893 0-.596.068-1.208.203-1.837.134-.63.314-1.236.539-1.82.236-.585.494-1.107.775-1.568.281-.46.562-.826.843-1.096.292-.27.567-.404.826-.404.27 0 .46.135.573.404.112.244.14.571.087.98l-.498 1.842.057-.293c-.18.719-.393 1.382-.64 1.989-.248.606-.506 1.129-.776 1.567-.27.438-.534.781-.792 1.028Z" clip-rule="evenodd"></path><path fill="#2F2352" d="M70.115 38.328h-2.073l2.022-7.264c.101-.337.135-.573.101-.708-.033-.135-.134-.202-.303-.202-.213 0-.41.107-.59.32-.18.213-.365.59-.556 1.13l-.287.791h-.32l.438-1.264c.158-.45.354-.797.59-1.045.236-.258.495-.438.776-.539.28-.101.567-.152.86-.152.359 0 .623.073.791.22a.94.94 0 0 1 .338.573c.056.236.067.494.033.775-.022.27-.067.534-.135.792l-.27 1.057.027-.073.041-.107c.315-.798.618-1.433.91-1.905.304-.483.624-.826.961-1.028a2.09 2.09 0 0 1 1.096-.304c.404 0 .713.118.927.354.224.236.337.528.337.877 0 .28-.068.545-.203.792a1.648 1.648 0 0 1-.539.573 1.36 1.36 0 0 1-.742.202c-.28 0-.505-.073-.674-.219-.157-.146-.236-.36-.236-.64 0-.248.056-.472.169-.675.112-.202.258-.37.438-.505.18-.146.376-.247.59-.304a.211.211 0 0 0-.084-.05.313.313 0 0 0-.069-.015.459.459 0 0 0-.05-.002c-.246 0-.5.09-.758.27-.258.168-.528.444-.809.826-.28.382-.567.887-.86 1.516a24.588 24.588 0 0 0-.876 2.276c-.127.373-.255.776-.383 1.207l-.628 2.45Z"></path><path fill="#2F2352" fill-rule="evenodd" d="M66.962 27.019c-.562-.405-1.461-.607-2.697-.607-.382 0-.764.006-1.147.017-.37.011-.797.017-1.28.017h-.843c-.304-.012-.59-.017-.86-.017a53.204 53.204 0 0 1-.674-.034l-.084.337c.438 0 .736.056.893.169.169.1.247.258.236.472a4.979 4.979 0 0 1-.135.809l-2.225 8.36c-.1.404-.213.708-.337.91a.896.896 0 0 1-.505.405c-.214.067-.512.112-.894.134l-.067.337c.19-.01.421-.016.69-.016.27-.012.557-.017.86-.017a34.328 34.328 0 0 1 2.545.017c.461.01.883.017 1.265.017.73 0 1.421-.074 2.073-.22a5.69 5.69 0 0 0 1.702-.69 3.5 3.5 0 0 0 1.163-1.13c.292-.45.438-.977.438-1.584 0-.686-.28-1.276-.842-1.77-.55-.495-1.422-.787-2.613-.877a7.238 7.238 0 0 0 2.14-.657c.63-.326 1.124-.725 1.484-1.197a2.5 2.5 0 0 0 .556-1.584c0-.674-.28-1.208-.843-1.601Zm-5.38 5.259-1.127 4.264c-.067.28-.112.528-.134.741-.012.214.044.377.168.49.124.112.354.168.691.168.798 0 1.45-.152 1.955-.455a2.82 2.82 0 0 0 1.13-1.247c.247-.54.37-1.147.37-1.82 0-.417-.073-.782-.219-1.096a1.547 1.547 0 0 0-.657-.759c-.303-.191-.708-.286-1.214-.286h-.963Zm.076-.287h.77c.64 0 1.185-.163 1.634-.489.461-.337.81-.775 1.046-1.314a4.04 4.04 0 0 0 .37-1.703c0-.562-.112-.994-.337-1.298-.213-.303-.59-.455-1.13-.455-.392 0-.673.079-.842.236-.168.146-.314.466-.438.96l-1.073 4.063Z" clip-rule="evenodd"></path></svg></a>
        <div class="flex items-center mt-2 md:mt-0">
            @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] text-black dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] text-black dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif

            <a href="#" class="w-10 h-10 rounded-full">
                <svg id="logo-89" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="ccustom" d="M39.9449 21.4998H32.8003C26.5594 21.4998 21.5003 26.559 21.5003 32.7998V39.9444C31.3502 39.214 39.2145 31.3497 39.9449 21.4998Z" fill="#775732"></path><path class="ccustom" d="M18.5003 39.9444V32.7998C18.5003 26.559 13.4411 21.4998 7.20026 21.4998H0.0556641C0.785998 31.3497 8.65036 39.214 18.5003 39.9444Z" fill="#775732"></path><path class="ccustom" d="M39.9449 18.4998C39.2145 8.64987 31.3502 0.78551 21.5003 0.0551758V7.19977C21.5003 13.4406 26.5594 18.4998 32.8003 18.4998H39.9449Z" fill="#775732"></path><path class="ccustom" d="M18.5003 0.0551758C8.65036 0.78551 0.785998 8.64987 0.0556641 18.4998H7.20026C13.4411 18.4998 18.5003 13.4406 18.5003 7.19977V0.0551758Z" fill="#775732"></path><path class="ccustom" d="M13.583 19.9998C16.3555 18.6145 18.615 16.355 20.0002 13.5825C21.3855 16.355 23.6449 18.6145 26.4175 19.9998C23.6449 21.385 21.3855 23.6445 20.0002 26.417C18.615 23.6445 16.3555 21.385 13.583 19.9998Z" fill="#CA9352"></path></svg>
            </a>
        </div>
    </header>

    <main class="container mx-auto max-w-custom flex flex-col md:flex-row">
        <div class="w-70 mx-auto md:mdx-0 md:mr-5">
        <div class="bg-white md:sticky md:top-8 border border-blue rounded-xl mt-16"

        >
            <div class="text-center px-6 py-2 pt-6">
                <h3 class="font-seibold text-base">Add an idea</h3>
                <p class="text-xs mt-4">
                    @auth
                        Let us know what you would like and we'll take a look over!
                        @else
                        Please login to create an idea.
                        @endauth
                </p>
            </div>

            @auth
            <livewire:create-idea />
            @else
                <div class="my-6 text-center">
                    <a
                        href="{{route('login')}}"
                        class="inline-block justify-center w-1/2 h-11 text-xs bg-blue
                        font-semibold  text-white rounded-xl border border-gray-200 hover:border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">

                        Login
                    </a>

                    <a
                        href="{{route('register')}}"
                        class="inline-block items-center justify-center w-1/2 h-11 text-xs bg-gray-200
                        font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-4">

                        Sign Up
                    </a>

                </div>


                @endauth
        </div>
            </div>
        <div class="w-full px-2 md:px-0 md:w-175">

            <livewire:status-filters />
            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>

    @if (session('success_message'))
        <x-notification-success
            :redirect="true"
            message-to-display="{{ (session('success_message')) }}"
        />
    @endif

    @livewireScripts
    </body>
</html>
