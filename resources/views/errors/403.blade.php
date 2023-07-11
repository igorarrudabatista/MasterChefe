<style> 
body{
  background-color:#5398FF;
  text-align:center;}

.whipping-cream{
  width:30%;
}

.whip0{fill:#53EBFF;}
.whip1{fill:#FFFFFF;}
.whip2{fill:none;stroke:#FFFFFF;}
.whip3{fill:#DDDDDD;}
.whip4{fill:#FFFFFF;}
.sugar{fill:#ffffff;}

#steel1{
  transform-origin: center center;
  stroke-width:5;stroke-miterlimit:10;
  animation: spin1 0.1s ease infinite;
}

#steel2{
  transform-origin: center center;
  stroke-width:5;stroke-miterlimit:10;
  animation: spin2 0.1s ease infinite;
}

@keyframes spin1 {
0%{
transform:scale3d(1, 1, 1);
}
50%{
transform:scale3d(0, 1, 1);
}
100%{
transform:scale3d(1, 1, 1);
}
}

@keyframes spin2 {
0%{
transform:scale3d(0, 1, 1);
}
50%{
transform:scale3d(1, 1, 1);
}
100%{
transform:scale3d(0, 1, 1);
}
}

#beaters{
  transform-origin: center center;
  animation: beaters 1.8s ease infinite;
}

@keyframes beaters {
0%{
  transform:translate(-80px, 0);
}
50%{
  transform:translate(80px, 0);
}
100%{
  transform:translate(-80px, 0);
}
}

#top{
  animation: top 1.8s ease infinite;
}

@keyframes top {
0%{
  transform:translate(-50px, 0);
}
50%{
  transform:translate(50px, 0);
}
100%{
  transform:translate(-50px, 0);
}
}


#sugar1{
  animation: sugar1 3.6s ease-in infinite;
}

#sugar2{
  animation: sugar2 3.6s ease-in infinite;
}

#sugar3{
  animation: sugar3 3.6s ease-in infinite;
}

#sugar4{
  animation: sugar4 3.6s ease-in infinite;
}

#sugar5{
  animation: sugar5 3.6s ease-in infinite;
}

#sugar6{
  animation: sugar6 3.6s ease-in infinite;
}

#sugar7{
  animation: sugar7 3.6s ease-in infinite;
}

#sugar8{
  animation: sugar8 3.6s ease-in infinite;
}

#sugar9{
  animation: sugar9 3.6s ease-in infinite;
}

#sugar10{
  animation: sugar10 3.6s ease-in infinite;
}

#sugar11{
  animation: sugar11 3.6s ease-in infinite;
}

#sugar12{
  animation: sugar12 3.6s ease-in infinite;
}

@keyframes sugar1 {
0%{
  transform:translate(0,0);
  opacity:0;
}
25%{
  transform:translate(0,0);
  opacity:0;
}
29%{
  transform:translate(0,0);
  opacity:1;
}
69%{
  transform:translate(0,200px);
  opacity:1;
}
100%{
  transform:translate(0,200px);
  opacity:0;
}
}

@keyframes sugar2 {
0%{
  transform:translate(0,0);
  opacity:0;
}
25%{
  transform:translate(0,0);
  opacity:0;
}
35%{
  transform:translate(0,0);
  opacity:1;
}
75%{
  transform:translate(0,200px);
  opacity:1;
}
100%{
  transform:translate(0,200px);
  opacity:0;
}
}

@keyframes sugar3 {
0%{
  transform:translate(0,0);
  opacity:0;
}
25%{
  transform:translate(0,0);
  opacity:0;
}
41%{
  transform:translate(0,0);
  opacity:1;
}
81%{
  transform:translate(0,200px);
  opacity:1;
}
100%{
  transform:translate(0,200px);
  opacity:0;
}
}

@keyframes sugar4 {
0%{
  transform:translate(0,0);
  opacity:0;
}
25%{
  transform:translate(0,0);
  opacity:0;
}
30%{
  transform:translate(0,0);
  opacity:1;
}
70%{
  transform:translate(0,200px);
  opacity:1;
}
100%{
  transform:translate(0,200px);
  opacity:0;
}
}

@keyframes sugar5 {
0%{
  transform:translate(0,0);
  opacity:0;
}
20%{
  transform:translate(0,0);
  opacity:0;
}
25%{
  transform:translate(0,0);
  opacity:1;
}
45%{
  transform:translate(0,0);
  opacity:1;
}
85%{
  transform:translate(0,200px);
  opacity:1;
}
100%{
  transform:translate(0,200px);
  opacity:0;
}
}

@keyframes sugar6 {
0%{
  transform:translate(0,0);
  opacity:0;
}
25%{
  transform:translate(0,0);
  opacity:0;
}
38%{
  transform:translate(0,0);
  opacity:1;
}
78%{
  transform:translate(0,200px);
  opacity:1;
}
100%{
  transform:translate(0,200px);
  opacity:0;
}
}

@keyframes sugar7 {
0%{
  transform:translate(0,0);
  opacity:0;
}
25%{
  transform:translate(0,0);
  opacity:0;
}
27%{
  transform:translate(0,0);
  opacity:1;
}
67%{
  transform:translate(0,200px);
  opacity:1;
}
100%{
  transform:translate(0,200px);
  opacity:0;
}
}

@keyframes sugar8 {
0%{
  transform:translate(0,0);
  opacity:0;
}
25%{
  transform:translate(0,0);
  opacity:0;
}
29%{
  transform:translate(0,0);
  opacity:1;
}
69%{
  transform:translate(0,200px);
  opacity:1;
}
100%{
  transform:translate(0,200px);
  opacity:0;
}
}

@keyframes sugar9 {
0%{
  transform:translate(0,0);
  opacity:0;
}
20%{
  transform:translate(0,0);
  opacity:0;
}
26%{
  transform:translate(0,0);
  opacity:1;
}
66%{
  transform:translate(0,200px);
  opacity:1;
}
100%{
  transform:translate(0,200px);
  opacity:0;
}
}

@keyframes sugar10 {
0%{
  transform:translate(0,0);
  opacity:0;
}
20%{
  transform:translate(0,0);
  opacity:0;
}
23%{
  transform:translate(0,0);
  opacity:1;
}
63%{
  transform:translate(0,200px);
  opacity:1;
}
100%{
  transform:translate(0,200px);
  opacity:0;
}
}
@keyframes sugar11 {
0%{
  transform:translate(0,0);
  opacity:0;
}
23%{
  transform:translate(0,0);
  opacity:0;
}
25%{
  transform:translate(0,0);
  opacity:1;
}
65%{
  transform:translate(0,200px);
  opacity:1;
}
100%{
  transform:translate(0,200px);
  opacity:0;
}
}

@keyframes sugar12 {
0%{
  transform:translate(0,0);
  opacity:0;
}
25%{
  transform:translate(0,0);
  opacity:0;
}
28%{
  transform:translate(0,0);
  opacity:1;
}
68%{
  transform:translate(0,200px);
  opacity:1;
}
100%{
  transform:translate(0,200px);
  opacity:0;
}
}
</style>
  

<svg class="whipping-cream" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 600 600" style="enable-background:new 0 0 600 600;" xml:space="preserve">

     <g id="bowl">
     	<path class="whip0" d="M397.4,461.1h-184c-12.6,0-24-7.1-29.7-18.3L113,302h384.9l-70.8,140.8C421.5,454,410,461.1,397.4,461.1z"/>
     </g>


     <g id="cream">
     	<path id="bottom" class="whip4" d="M141.1,357.9l42.7,84.9c5.6,11.2,17.1,18.3,29.7,18.3h184c12.6,0,24-7.1,29.7-18.3l42.7-84.9
     		L141.1,357.9z"/>
     	<path id="top" class="whip4" d="M209.2,357.9h201.5c-30.5,0.1-49.2-27-103.1-27S233.6,357.9,209.2,357.9z"/>
     </g>
     <g class="sugar">
     <circle id="sugar1" cx="401" cy="200" r="0.8"/>
     <circle id="sugar2" cx="405" cy="200" r="0.8"/>
     <circle id="sugar3" cx="403" cy="200" r="0.8"/>
     <circle id="sugar4" cx="404" cy="200" r="0.8"/>
     <circle id="sugar5" cx="402" cy="200" r="0.8"/>
     <circle id="sugar6" cx="406" cy="200" r="0.8"/>
     <circle id="sugar7" cx="402" cy="200" r="0.8"/>
     <circle id="sugar8" cx="401" cy="200" r="0.8"/>
     <circle id="sugar9" cx="403" cy="200" r="0.8"/>
     <circle id="sugar10" cx="405" cy="200" r="0.8"/>
     <circle id="sugar11" cx="404" cy="200" r="0.8"/>
     <circle id="sugar12" cx="406" cy="200" r="0.8"/>
    </g>

    <g id="beaters">
     <g>
     <rect x="279.1" y="215.4" class="st2" width="7.1" height="54"/>
     <path class="whip2" id="steel1" d="M282.1,379.9L282.1,379.9c-16.1,0-29.1-13-29.1-29.1v-58.4c0-12.9,10.4-23.3,23.3-23.3H288
       c12.9,0,23.3,10.4,23.3,23.3v58.4C311.2,366.8,298.2,379.9,282.1,379.9z"/>
     <path class="whip2" id="steel2" d="M282.1,379.9L282.1,379.9c-16.1,0-29.1-13-29.1-29.1v-58.4c0-12.9,10.4-23.3,23.3-23.3H288
       c12.9,0,23.3,10.4,23.3,23.3v58.4C311.2,366.8,298.2,379.9,282.1,379.9z"/>
     </g>
     <g>
     <rect x="330.1" y="215.4" class="st2" width="7.1" height="54"/>
     <path class="whip2" id="steel1" d="M334.1,379.9L334.1,379.9c-16.1,0-29.1-13-29.1-29.1v-58.4c0-12.9,10.4-23.3,23.3-23.3H340
       c12.9,0,23.3,10.4,23.3,23.3v58.4C363.2,366.8,350.2,379.9,334.1,379.9z"/>
     <path class="whip2" id="steel2" d="M334.1,379.9L334.1,379.9c-16.1,0-29.1-13-29.1-29.1v-58.4c0-12.9,10.4-23.3,23.3-23.3H340
       c12.9,0,23.3,10.4,23.3,23.3v58.4C363.2,366.8,350.2,379.9,334.1,379.9z"/>
     </g>

     <g>
       <path class="whip1" d="M328.1,100.3H139.8c-15.7,0-28.4,12.7-28.4,28.4V197c0,15.7,12.7,28.4,28.4,28.4h197c12,0,21.8-9.8,21.8-21.8
         v-72.6C358.6,114,345,100.3,328.1,100.3z M215.9,140.9h-63.7c-5.2,0-9.5-4.5-9.5-10v0c0-5.5,4.3-10,9.5-10h63.7
         C221.1,120.9,221.1,140.9,215.9,140.9z"/>
       <path class="whip3" d="M345.9,218.3h-64.9c-2.4,0-4.3-1.9-4.3-4.3l0,0c0-2.4,1.9-4.3,4.3-4.3h64.9c2.4,0,4.3,1.9,4.3,4.3l0,0
         C350.2,216.4,348.3,218.3,345.9,218.3z"/>
       <path class="whip3" d="M329.7,202.8h-32.4c-11.4,0-20.7-9.3-20.7-20.7v-55.2c0-11.4,9.3-20.7,20.7-20.7h32.4
         c11.4,0,20.7,9.3,20.7,20.7v55.2C350.5,193.5,341.2,202.8,329.7,202.8z"/>
     </g>
    </g>
     </svg>

     <h1> ACESSO NÃO PERMITIDO </h1>
     <a class="btn" href="{{asset('/painel')}}">VOLTAR</a>
