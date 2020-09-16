@php
$i = "<!--Mettez votre code ici 🎉🔥-->

<!-- Header H1 😀 -->
<h1>yyyy</h1>
<!-- Header H2 😀 -->
<h2>yyyy</h2>";

$htmlpage = " 
                    
     <body>
     <h1>This is a Heading</h1>
     <p>This is a paragraph.</p>
     </body>
                    ";
@endphp
<section class="text-gray-700 body-font">
     <div class="container px-5 py-5 mx-auto">
      
       <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 ">
         <div class="p-4 md:w-5/12 md:mb-0 mb-6 flex overflow-y-auto bg-gray-100 h-screen">
           <div class="flex-grow pl-6 ">
             <h1 class="text-gray-900 text-3xl title-font font-bold mb-2">Syntaxe HTML standard</h1>
             <p class="">
               A PHP script starts with the   and ends with the  tag.

               The PHP delimiter <code class="bg-gray-900 p-2 m-2 rounded text-xs text-yellow-300 ">html </code> in the following example simply tells the PHP engine to treat the enclosed code block as PHP code, rather than simple HTML.
             </p>
               <h1 class="text-gray-900 text-3xl title-font font-bold mb-2">Body</h1>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam distinctio consequatur, quidem soluta optio vitae rerum ipsum a accusamus! Fugit aliquam maiores hic laboriosam dicta quos omnis, earum unde officia.</p>
                    <pre class="w-full">
                         <code class="language-html">
                             {{  html_entity_decode($htmlpage) }}
                         </code>
                    </pre>
               <p>Neque reiciendis repudiandae, dolorem rem soluta debitis assumenda nihil veritatis quam dignissimos ipsa? Ex odit pariatur eligendi quo quas, vitae quae assumenda aliquam, tempora excepturi reprehenderit id ducimus aliquid natus.</p>
               <p>Explicabo sed neque enim? Cupiditate sint dolorum recusandae distinctio suscipit voluptas quod, ipsa possimus odio enim laudantium soluta harum quasi quisquam velit corrupti repudiandae laborum officia neque? In, magnam eveniet!</p>
               <p>Praesentium fuga quas minima perferendis sit laborum quam pariatur doloremque architecto eos velit iure ipsum, unde error ut animi possimus? Dolores architecto numquam veritatis. Omnis tempora quo ratione sunt a!</p>
               <p>Sed sunt iure nostrum. Nesciunt, iure temporibus architecto pariatur dolore sequi maxime ab in qui aliquid aspernatur quidem impedit excepturi nisi nemo nulla voluptatum assumenda laborum maiores eligendi. Fugiat, libero.</p>
               <p>Nostrum expedita maiores molestias ipsum iure cupiditate labore animi deserunt alias, quaerat repellat. Nihil, cupiditate obcaecati blanditiis commodi maxime sunt. Assumenda ea est fugiat officiis, eius quis iure libero. Laboriosam.</p>
               <p>Laborum, tenetur molestiae officiis numquam ullam, cupiditate ab nisi, vero fugiat neque nesciunt maiores beatae rerum natus assumenda vitae quibusdam maxime alias! Illum ut suscipit ipsam natus nihil error odio.</p>
               <p>Quia voluptatem eum, accusantium saepe possimus nulla minima, numquam corrupti iure a rerum vero quos unde dolor accusamus sunt nobis rem optio? Ea in quod odio dolores! Amet, hic iusto!</p>
               <p>Nam tenetur delectus harum in necessitatibus? Reprehenderit quasi vero alias enim tenetur labore cumque soluta! Similique veniam eum consectetur sequi explicabo! Officia eveniet illum laudantium, quod error obcaecati voluptatibus! Quibusdam.</p>

             
           </div>
         </div>
         <div class=" p-1 md:w-4/12 md:mb-0 mb-6 flex overflow-y-auto h-screen">
          <pre class="w-full shadow-inner" ><code class="language-html text-sm">{{ $i }}</code></pre>
         </div>
         <div class="p-4 md:w-3/12 md:mb-0 mb-6 flex">
           <div class="flex-grow pl-6">
               {!! $i !!}
           </div>
         </div>
       </div>
     </div>
</section>
