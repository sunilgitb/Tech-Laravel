@extends('frontend.layouts.app')
@include('frontend.layouts.header')
@section('title', 'Home')

@section('meta_description', 'We are a corporate web agency with a dynamic team of creative, intelligent, and enthusiastic individuals. We foster an environment of continuous inspiration and growth, encouraging each other to strive for excellence and happiness in all that we do.')

    <section class="banner">
      <div class="banner__shadowtext">Tech<br />Simians</div>
      <div class="banner__text">Smart Sapiens on duty</div>
      <div class="banner__subtext">We are corporate web agency</div>
      <div class="banner__img">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="enable-background:new 0 0 1920 1080" viewBox="0 0 1920 1080">
            <font horiz-adv-x="2048">
              <font-face font-family="Inter-SemiBold" underline-position="-155" underline-thickness="101" units-per-em="2048"/>
              <glyph d="M956 1203c64-118 96-280 96-485 0-195-29-356-87-483C881 52 744-39 553-39c-172 0-300 75-384 224C99 310 64 477 64 687c0 163 21 302 63 419 79 217 221 326 427 326 185 0 319-76 402-229m-98-492c0 163-20 297-60 402s-118 157-233 157c-106 0-183-50-232-149-49-100-74-247-74-441 0-146 16-263 47-352 48-135 130-203 246-203 93 0 168 41 223 124s83 237 83 462z" horiz-adv-x="1139" unicode="0"/>
              <glyph d="m400 571 192 111c86 50 146 93 181 128 55 55 82 119 82 190 0 83-25 150-75 199s-117 73-200 73c-123 0-209-47-256-140-25-50-39-119-42-208H99c2 125 25 226 69 305 78 139 216 208 413 208 164 0 284-44 360-133 75-89 113-187 113-296 0-115-40-213-121-294-47-47-130-105-251-172l-137-76c-65-36-117-70-154-103-67-58-109-122-126-193h782V0H64c7 123 32 231 77 322 44 91 130 174 259 249z" horiz-adv-x="1139" unicode="2"/>
              <glyph d="M49 440h188c8-93 25-160 52-202 47-75 131-113 253-113 95 0 171 25 228 76s86 116 86 196c0 99-30 168-90 207-61 39-145 59-252 59h-36c-13-1-25-1-38-2v159c19-2 34-3 47-4s26-1 41-1c67 0 123 11 166 32 76 37 114 104 114 200 0 71-25 126-76 165s-110 58-177 58c-120 0-203-40-249-120-25-44-40-107-43-188H85c0 107 21 197 64 272 73 133 202 200 387 200 146 0 259-32 339-97s120-160 120-283c0-88-24-159-71-214-29-34-67-61-114-80 75-21 134-60 177-119 42-59 63-132 63-217 0-137-45-248-135-334S697-39 532-39C363-39 240 8 164 101 87 194 49 307 49 440z" horiz-adv-x="1139" unicode="3"/>
              <glyph d="M677 507v649L218 507M680 0v350H52v176l656 910h152V507h211V350H860V0z" horiz-adv-x="1139" unicode="4"/>
              <glyph d="M253 365c12-103 60-174 143-213 43-20 92-30 148-30 107 0 186 34 237 102s77 143 77 226c0 100-30 177-91 232s-135 82-220 82c-62 0-115-12-159-36-45-24-83-57-114-100l-156 9 109 771h744v-174H362l-61-398c33 25 65 44 95 57 53 22 115 33 185 33 131 0 243-42 334-127s137-192 137-322c0-135-42-255-125-358C843 16 709-36 526-36 409-36 306-3 217 63 127 128 77 229 66 365z" horiz-adv-x="1139" unicode="5"/>
              <glyph d="M1028 1057H850c-11 57-28 101-51 133-43 60-109 90-197 90-101 0-181-46-240-139s-92-227-99-400c41 61 93 106 156 136 57 27 121 40 192 40 120 0 225-38 314-115s134-191 134-343c0-130-42-245-127-345C847 13 727-37 570-37c-134 0-250 51-347 153C126 217 77 388 77 629c0 178 22 329 65 453 83 237 236 356 457 356 160 0 272-41 335-124s94-169 94-257M869 444c0 73-21 143-63 210-42 66-118 99-229 99-77 0-145-26-203-77-59-51-88-129-88-232 0-91 27-167 80-228 53-62 126-93 220-93 95 0 166 32 213 96 47 63 70 138 70 225z" horiz-adv-x="1139" unicode="6"/>
              <glyph d="M1071 1408v-157c-46-45-107-122-183-233-77-111-144-230-203-358-58-125-102-238-132-341-19-66-44-172-75-319H279c45 273 145 545 300 816 91 159 187 296 288 411H75v181z" horiz-adv-x="1139" unicode="7"/>
              <glyph d="M810 1057c0 53-21 102-64 147s-108 67-195 67-149-22-188-67-58-97-58-157c0-67 25-120 75-158s109-57 177-57c79 0 141 22 186 67 45 44 67 97 67 158m48-665c0 93-28 163-85 211s-129 72-218 72c-86 0-156-24-210-73-55-49-82-117-82-204 0-75 25-139 75-193 49-55 126-82 230-82 83 0 153 23 208 68s82 112 82 201M195 838c-53 53-79 123-79 208 0 107 39 198 116 275s187 115 329 115c137 0 245-36 323-108 78-73 117-157 117-254 0-89-23-162-68-217-25-31-65-62-118-92 59-27 106-59 140-94 63-67 95-153 95-260 0-126-42-233-127-320C838 3 719-41 564-41 425-41 307-3 211 73 114 148 66 258 66 402c0 85 21 158 62 220 41 61 103 108 184 141-50 21-89 46-117 75z" horiz-adv-x="1139" unicode="8"/>
              <glyph d="M272 346c5-99 44-168 115-206 37-20 78-30 124-30 86 0 159 36 220 108 61 71 104 217 129 436-40-63-89-108-148-133-59-26-123-39-191-39-138 0-247 43-327 129-81 86-121 197-121 332 0 130 40 244 119 343s196 148 351 148c209 0 353-94 432-282 44-103 66-233 66-388 0-175-26-331-79-466C875 73 727-40 518-40 378-40 272-3 199 70S90 235 90 346m739 611c0 105-26 184-79 236-53 51-121 77-203 77-88 0-158-29-209-88-52-59-78-138-78-237 0-93 23-167 68-222s118-83 217-83c71 0 137 24 196 71s88 129 88 246z" horiz-adv-x="1139" unicode="9"/>
              <glyph d="m910 602-223 649-237-649m133 867h225L1341 0h-218L974 440H393L234 0H30z" horiz-adv-x="1366" unicode="A"/>
              <glyph d="M175 1469h1019v-180H374V843h721V668H374V0H175z" horiz-adv-x="1251" unicode="F"/>
              <glyph d="M877 438c0-124-18-220-55-289C754 24 625-39 434-39 324-39 230-9 152 51 74 110 35 216 35 369v105h187V369c0-80 18-140 54-180 35-41 91-61 166-61 106 0 175 36 208 109 20 45 30 129 30 253v979h197z" horiz-adv-x="1024" unicode="J"/>
              <glyph d="M151 1469h285L858 227l419 1242h282V0h-189v867c0 30 1 80 2 149s2 144 2 223L955 0H758L336 1239v-45c0-36 1-91 3-164 1-74 2-128 2-163V0H151z" horiz-adv-x="1706" unicode="M"/>
              <glyph d="M462 117c63 0 125 15 184 44 100 49 150 128 150 239v145c-22-14-50-26-85-35s-69-16-102-20l-109-14c-65-9-114-22-147-41-55-31-83-81-83-150 0-52 19-93 57-123s83-45 135-45m244 532c41 5 69 23 83 52 8 16 12 39 12 69 0 61-22 106-65 134-44 27-107 41-188 41-94 0-161-25-200-76-22-28-36-70-43-125H137c3 132 46 224 129 276 82 51 177 77 286 77 126 0 228-24 307-72 78-48 117-123 117-224V184c0-19 4-34 12-45 7-11 23-17 48-17 8 0 17 1 27 2s21 2 32 4V-5c-28-8-49-13-64-15s-35-3-60-3c-62 0-107 22-135 66-15 23-25 56-31 99-37-48-89-90-158-125S503-36 420-36c-99 0-180 30-243 91-63 60-95 135-95 226 0 99 31 176 93 231s143 88 244 101z" horiz-adv-x="1139" unicode="a"/>
              <glyph d="M118 1474h175V941c39 51 86 91 141 118s114 40 178 40c133 0 242-46 325-137 83-92 124-227 124-406 0-169-41-310-123-422S742-34 597-34c-81 0-150 20-206 59-33 23-69 61-107 112V0H118m759 547c0 113-24 206-72 280-49 74-120 111-214 111-82 0-154-30-215-91-62-61-93-161-93-300 0-101 13-182 38-245 47-118 136-177 265-177 97 0 170 39 219 116 48 77 72 179 72 306z" horiz-adv-x="1139" unicode="b"/>
              <glyph d="M962 903c36-54 60-117 72-189 11-49 16-128 16-236H265c3-109 29-196 77-261 48-66 122-99 223-99 94 0 169 31 225 93 32 36 55 78 68 125h177c-5-39-20-83-46-131-27-49-56-88-89-119C845 33 778-3 697-22c-43-11-92-16-147-16-133 0-246 49-339 146S72 340 72 515c0 172 47 312 140 419s215 161 366 161c76 0 150-18 221-53 71-36 126-82 163-139m-97-282c-7 78-24 140-51 187-49 87-132 130-247 130-83 0-152-30-208-89-56-60-86-136-89-228z" horiz-adv-x="1139" unicode="e"/>
              <glyph d="M132 1071h171V919c51 63 104 108 161 135s120 41 189 41c152 0 255-53 308-159 29-58 44-141 44-249V0H822v675c0 65-10 118-29 158-32 67-90 100-174 100-43 0-78-4-105-13-49-15-93-44-130-88-30-35-49-72-58-109-9-38-14-92-14-162V0H132z" horiz-adv-x="1139" unicode="n"/>
              <glyph d="M877 542c0 85-12 159-37 220-47 118-132 177-256 177-125 0-210-62-256-187-25-67-37-151-37-254 0-83 12-153 37-211 47-111 132-166 256-166 84 0 154 35 210 106 55 70 83 175 83 315m-759 524h175V924c36 49 75 86 118 113 61 40 132 60 214 60 121 0 224-46 309-139s127-226 127-399c0-233-61-400-183-500-77-63-167-95-270-95-81 0-148 18-203 53-32 20-68 54-107 103v-547H118z" horiz-adv-x="1139" unicode="p"/>
              <glyph d="M137 1071h171V886c14 36 48 80 103 132 55 51 118 77 189 77 3 0 9 0 17-1s22-2 41-4V900c-11 2-20 3-29 4s-19 1-30 1c-91 0-160-29-209-87-49-59-73-126-73-202V0H137z" horiz-adv-x="682" unicode="r"/>
              <glyph d="M801 1071h199c-25-69-82-225-169-470-65-184-120-334-164-450-104-273-177-440-220-500s-116-90-220-90c-25 0-45 1-58 3-14 2-31 6-51 11v164c31-9 54-14 68-16s26-3 37-3c33 0 58 6 74 17 15 11 28 24 39 40 3 5 15 33 36 82s36 86 45 110L21 1071h204l287-872z" horiz-adv-x="1024" unicode="y"/>
            </font>
            <path d="m1908.7 1090.2-260-634.2c-5.6-17.4-13.4-30-30-30H307.4c-16.5 0-30 7-40 30l-260 634.2" style="fill:#fff"/>
            <g class="svg__top">
              <ellipse cx="987" cy="540.4" rx="5.5" ry="2.5" style="fill:#e4e4e4"/>
              <path d="M888 527.8h105.7a13 13 0 0 1 13.1 13c0 7.3-5.9 13.2-13 13.2h-106a13.1 13.1 0 0 1 0-26.2z" style="opacity:.1;fill:none;stroke:#000;stroke-miterlimit:8;enable-background:new"/>
              <path d="M987 498.6v41.2" style="fill:none;stroke:#cfcfcf;stroke-miterlimit:8;stroke-dasharray:3,3"/>
              <path d="M888 482.4h105.7a13.1 13.1 0 1 1 0 26.2H888a13 13 0 0 1-13-13 13 13 0 0 1 13-13.2z" style="fill:#ccc"/>
              <path d="M888 503a12.6 12.6 0 0 1 0-25.1h105.7a12.6 12.6 0 0 1 0 25.2H888z" style="fill:#fff"/>
              <path d="M993.7 478.4a12.1 12.1 0 0 1 0 24.2H888a12.1 12.1 0 0 1 0-24.2h105.8m0-1H888a13.1 13.1 0 1 0 0 26.2h105.8a13.1 13.1 0 0 0 0-26.2z" style="fill:#d0d0d0"/>
              <path d="M901.8 489.4a1 1 0 0 0-.3-.7l-.9-.5-1.3-.2a4 4 0 0 0-1.2.2l-1 .5a1 1 0 0 0-.3.7c0 .4.2.7.5.9l1.4.4.8.2c.3 0 .5 0 .7.2.2 0 .4 0 .5.2l.2.3c0 .2 0 .3-.2.4l-.6.3-.8.1h-.7l-.6-.3a.6.6 0 0 1-.3-.5h-1c0 .3.1.6.3.8l1 .5 1.3.2c.5 0 1 0 1.4-.2l1-.5.2-.7-.1-.6-.5-.4-.7-.3-.7-.1-.7-.1a3.7 3.7 0 0 1-.8-.3 1 1 0 0 1-.4-.2v-.3l.1-.3c.1-.2.3-.2.5-.3h.7c.4-.1.7 0 1 .1.3 0 .5.3.5.5h1zm7.1-.2a2 2 0 0 0-1.1-.9c-1-.4-2.2-.4-3.3 0-.4.2-.8.5-1.1.9-.6.8-.6 1.9 0 2.7.3.4.7.6 1.1.8 1 .4 2.2.4 3.3 0a2.3 2.3 0 0 0 1.1-3.5zm-.9 2.3c-.2.3-.4.5-.7.6a3 3 0 0 1-2.2 0c-.3 0-.6-.3-.8-.6a2 2 0 0 1 0-2c.2-.2.5-.5.8-.6a3 3 0 0 1 2.2 0c.9.4 1.3 1.5.8 2.4v.2zm3.8 1.5v-4.3h1.3l.9.1c.2 0 .3.2.5.3l.1.5-.1.5a1 1 0 0 1-.5.3 3 3 0 0 1-.9.1h-1.8v.6h2c.4 0 .8 0 1.3-.2.3 0 .6-.2.8-.5.2-.2.3-.5.3-.8 0-.3-.1-.5-.3-.8l-.8-.5-1.4-.2h-2.5v4.9h1zm1.2-2.2 1.7 2.2h1.2l-1.7-2.2H913zm5.9-2v4.2h1v-4.3h2.2v-.6h-5.4v.6h2.1zm9.8 4.2c.4 0 .9 0 1.3-.2.3 0 .6-.3.8-.5.2-.2.3-.4.2-.7 0-.2 0-.4-.2-.6l-.5-.4a2 2 0 0 0-.7-.2l.6-.2.4-.3.2-.5a1 1 0 0 0-.3-.7l-.7-.4c-.4-.2-.8-.2-1.3-.2H926v4.9h2.8zm-1.7-2.2h2.3l.5.4.2.4c0 .2-.2.4-.4.5-.3.2-.7.2-1 .2H927v-1.5zm0-2h1.5l1 .1.2.5c0 .2 0 .3-.2.4l-.4.3H927v-1.4zm7.3 2.3v1.9h1.1v-2l2.6-2.9h-1.2l-1.9 2.2-2-2.2h-1.1l2.5 3z" style="opacity:.4;fill-rule:evenodd;clip-rule:evenodd;enable-background:new"/>
              <path d="m987 493.3-5.3-4.7h10.6l-5.3 4.7z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#0047ff"/>
            </g>
            <g class="svg__top">
              <ellipse cx="269.5" cy="701" rx="7" ry="5.3" style="fill:#ededed" transform="rotate(-17.2 269.5 700.9)"/>
              <path d="M269.5 663.1V701" style="fill:none;stroke:#cfcfcf;stroke-miterlimit:8;stroke-dasharray:3,3"/>
              <path d="m263 651.8 21.7.8-6 17-22-.8 6.2-17z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#fff;stroke:#17e9c3;stroke-width:2;stroke-miterlimit:8"/>
            </g>
            <g class="svg__top">
              <path d="m145.8 959 22.2-9.4 15.3 9.5-22.1 9.5-15.4-9.6z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#fff;stroke:#17e9c3;stroke-width:2;stroke-miterlimit:8"/>
              <path d="m181 965.9-22.2 9.5-15.5-9.6" style="fill:none;stroke:#17e9c3;stroke-width:2;stroke-miterlimit:8"/>
              <path d="m178.6 972.7-22.3 9.5-15.5-9.6" style="fill:none;stroke:#17e9c3;stroke-width:2;stroke-miterlimit:8"/>
              <ellipse cx="159.5" cy="1014" rx="7" ry="5.3" style="fill:#ededed" transform="rotate(-17.2 159.5 1013.9)"/>
              <path d="M159.5 985.1v28.9" style="fill:none;stroke:#cfcfcf;stroke-miterlimit:8;stroke-dasharray:3,3"/>
            </g>
            <g class="svg__top">
              <path d="M201.4 868.6a15 15 0 0 0-10 3.8 11.1 11.1 0 0 0-9.7 3.7h-.4c-4.1 0-8.4 2.5-9.6 5.8-1.2 3.2 1.2 5.9 5.3 6l25 .2c4.1 0 8.4-2.5 9.5-5.8.9-2.5-.4-4.7-3-5.5l.1-.3c1.5-4.3-1.7-7.9-7.2-8z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#fff;stroke:#17e9c3;stroke-width:2;stroke-miterlimit:8"/>
              <ellipse cx="193.5" cy="918" rx="7" ry="5.3" style="fill:#ededed" transform="rotate(-17.2 193.5 917.9)"/>
              <path d="M193.5 889.1V918" style="fill:none;stroke:#cfcfcf;stroke-miterlimit:8;stroke-dasharray:3,3"/>
            </g>
            <g class="svg__top">
              <path d="m216.4 790.2 16.1.4c5.7.1 9 4 7.4 8.7-1.7 4.7-7.7 8.5-13.4 8.3l-16.3-.3c-5.8-.1-9-4-7.3-8.8 1.7-4.7 7.7-8.4 13.5-8.3z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#fff;stroke:#17e9c3;stroke-width:2;stroke-miterlimit:8"/>
              <path d="m216.2 797.2 11.6.2a1.2 1.2 0 0 1 1.3 1.6c-.4 1-1.4 1.6-2.5 1.6l-11.6-.2c-1 0-1.6-.8-1.3-1.7.4-1 1.4-1.6 2.5-1.5z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#17e9c3"/>
              <ellipse cx="220.5" cy="839" rx="7" ry="5.3" style="fill:#ededed" transform="rotate(-17.2 220.5 838.9)"/>
              <path d="M220.5 810.1V839" style="fill:none;stroke:#cfcfcf;stroke-miterlimit:8;stroke-dasharray:3,3"/>
            </g>
            <g class="svg__top">
              <path d="m237.9 737.9-8.2-9.6 14.8-8.8m12.5.5 8.2 9.4-14.8 8.8" style="fill:none;stroke:#17e9c3;stroke-width:2;stroke-miterlimit:8"/>
              <ellipse cx="245.5" cy="768" rx="7" ry="5.3" style="fill:#ededed" transform="rotate(-17.2 245.5 767.9)"/>
              <path d="M245.5 730.1V768" style="fill:none;stroke:#cfcfcf;stroke-miterlimit:8;stroke-dasharray:3,3"/>
            </g>
            <image xlink:href="{{asset('frontend/assets/img/code.png')}}" width="725" height="373" style="overflow:visible" transform="matrix(1 0 .0763 .6037 1069 839)"/>
            <g class="svg__top">
              <path d="M1499.4 602.3c16.8.8 32.7 10.2 36.3 22.5 3.9 13.3-8.6 25.6-29.2 25.6-21.3 0-39.6-13.3-39.5-27.5 0-13.3 15.4-21.4 32.4-20.6z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#fff;stroke:#ccc;stroke-miterlimit:8"/>
              <path d="M1501.2 621.3c3.5.2 6.9 2.1 7.6 4.7.8 2.8-1.8 5.4-6 5.4-4.6 0-8.4-2.8-8.4-5.8 0-2.8 3.3-4.5 6.8-4.3z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#17e9c3"/>
              <path d="m1501.8 626 45-284.3" style="fill-rule:evenodd;clip-rule:evenodd;fill:#fff;stroke:#ccc;stroke-miterlimit:8"/>
              <path d="M1546 339c3.7.3 7.2 2.3 8 5 .8 2.9-2 5.6-6.4 5.6-4.7 0-8.6-3-8.6-6s3.3-4.7 7-4.5z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#17e9c3"/>
              <path d="m1364.7 692.1.2 8.2c33.4 39.5 95.9 68.5 164.7 68.6 50 0 90.8-15.3 116-39.1 0 0-.5-4.8-.6-8.7-13.1-8.6-280.3-29-280.3-29z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#003bd4"/>
              <path d="M1450.5 615.4c-.9-5-.8-11-.8-11.7l-90.5 9.5-35.6-5.2a117.7 117.7 0 0 0 27.5 65l102.6-41.9v-7c-1.3-2.8-2.5-4.2-3.3-8.7z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#0dbf9f"/>
              <path d="M1449.5 607.3c0-1.2 0-2.4.2-3.6l-90.5 2.5-35 1a111.3 111.3 0 0 0 26.9 58.8l102.6-42c-2.7-5.2-4.2-11-4.2-16.7z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#17e9c3"/>
              <path d="m1477.6 597.7-81.1-53-7.3-4.8c-29 17.6-47.7 44.2-47.6 76.1 0 3.2.2 6.5.6 9.6l10.9-.3 99.4-2.7c3-11.9 12.6-20.6 25-24.9z" style="opacity:.02;fill-rule:evenodd;clip-rule:evenodd"/>
              <path d="M1477.5 554.6v-6.9l-81-44-7.3-4.7c-29 17.6-47.7 44.2-47.6 76 0 3.3.2 6.5.6 9.7l10.9-.4 100.6-2.8c3.9-12.2 8-21 23.8-26.9z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#003bd4"/>
              <path d="m1477.6 547.7-81.1-53-7.3-4.8c-29 17.6-47.7 44.2-47.6 76.1 0 3.2.2 6.5.6 9.6l10.9-.3 99.4-2.7c3-11.9 12.6-20.6 25-24.9z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#0047ff"/>
              <path d="M1511.5 579c4.3.1 8.7.7 12.9 1.5l11-66.8.9-6a234 234 0 0 0-30.7-3.5c-39.6-2-75.2 6.5-101.2 22.4l7.6 5 76.1 49.9c7-2 15-3 23.4-2.6z" style="opacity:.03;fill-rule:evenodd;clip-rule:evenodd"/>
              <path d="M1501.5 518c4.3.1 8.7.7 12.9 1.5l11-66.8.9-15c-10-1.8-105.5 3.2-131.6 19.2v9l83.4 54.6c7-2 15-3 23.4-2.6z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#0dbf9f"/>
              <path d="M1501.5 509c4.3.1 8.7.7 12.9 1.5l11-66.8.9-6a234 234 0 0 0-30.7-3.5c-39.6-2-75.2 6.5-101.2 22.5l7.6 5 76.1 49.8c7-2 15-3 23.4-2.6z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#17e9c3"/>
              <path d="m1539.8 586.4 35.7-59.6c-11-4-22.1-7-33.5-9l-11 66.2c3 .7 5.9 1.5 8.7 2.4z" style="opacity:.03;fill-rule:evenodd;clip-rule:evenodd"/>
              <path d="M1568.5 493.8c-3.1 4.9-30.5 33.8-44.4 57.2 0 3.2 0 4.6.3 7.4 1.5.4 6.9 2.5 8.4 3l35.7-59.6v-8z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#003bd4"/>
              <path d="M1661.2 656.4c-9.3-34.7-43.9-63.3-85.3-78.2l-33.6 55.8c15.7 5.5 28.2 15.4 31.9 27.5 1.8 6 1.2 11.8-1.5 17l67.2 41.4c19.8-18 28.1-37.9 21.3-63.5z" style="opacity:.03;fill-rule:evenodd;clip-rule:evenodd"/>
              <path d="m1532.8 553.4 35.7-59.6c-11-4-22.1-7-33.5-9l-11 66.2c3 .7 5.9 1.5 8.7 2.4z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#0047ff"/>
              <path d="M1659.2 624.4c-9.3-34.7-43.9-63.3-85.3-78.2l-31.6 47.8.8 8.2c15.7 5.4 22.9 10.5 28.7 21.7 2.5 4.8 3.1 11.2.9 14.5 0 4 0 4 .2 7.8l65 41.7c19.8-18 28.1-37.9 21.3-63.5z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#0dbf9f"/>
              <path d="M1661.2 616.4c-9.3-34.7-43.9-63.3-85.3-78.2l-33.6 55.8c15.7 5.5 28.2 15.4 31.9 27.5 1.8 6 1.2 11.8-1.5 17l67.2 41.4c19.8-18 28.1-37.9 21.3-63.5z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#17e9c3"/>
              <path d="M1548.5 657.2c-7.5 7.4-20.4 12.3-36.7 12.3a70.2 70.2 0 0 1-48.9-18.2l-98 40c33.4 39.5 95.9 68.6 164.7 68.6 50 0 90.8-15.3 116-39.1l-97.1-63.6z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#0047ff"/>
            </g>
            <g class="svg__top">
              <linearGradient id="a" x1="804.7" x2="804.7" y1="292.9" y2="355.7" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#ededed"/>
                <stop offset="1" style="stop-color:#fff;stop-opacity:0"/>
              </linearGradient>
              <path d="M639.4 599.6h42l-17.8 125.5h-44.8l20.6-125.5z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#a)"/>
              <linearGradient id="b" x1="771" x2="771" y1="292.9" y2="355.7" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#ededed"/>
                <stop offset="1" style="stop-color:#fff;stop-opacity:0"/>
              </linearGradient>
              <path d="M574 599.6h42.1l-22 125.5h-44.8L574 599.6z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#b)"/>
              <linearGradient id="c" x1="739.9" x2="739.9" y1="292.9" y2="379.5" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#ededed"/>
                <stop offset="1" style="stop-color:#fff;stop-opacity:0"/>
              </linearGradient>
              <path d="M519.9 552h41.3L525 725.1h-45.2l40.2-173z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#c)"/>
              <linearGradient id="d" x1="837.4" x2="837.4" y1="292.9" y2="332.7" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#ededed"/>
                <stop offset="1" style="stop-color:#fff;stop-opacity:0"/>
              </linearGradient>
              <path d="M699 645.6h43.1l-8.6 79.5h-44.8l10.4-79.5z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#d)"/>
              <linearGradient id="e" x1="872.7" x2="872.7" y1="292.9" y2="371.4" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#ededed"/>
                <stop offset="1" style="stop-color:#fff;stop-opacity:0"/>
              </linearGradient>
              <path d="M773 568.2h41.2l-11.6 157h-44.8l15.1-157z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#e)"/>
              <linearGradient id="f" x1="905.4" x2="905.4" y1="292.9" y2="346" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#ededed"/>
                <stop offset="1" style="stop-color:#fff;stop-opacity:0"/>
              </linearGradient>
              <path d="M833.6 619H876l-4.3 106H827l6.7-106.2z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#f)"/>
              <linearGradient id="g" x1="939.4" x2="939.4" y1="292.9" y2="334.5" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#ededed"/>
                <stop offset="1" style="stop-color:#fff;stop-opacity:0"/>
              </linearGradient>
              <path d="M899.2 642h43l-.5 83.2h-44.8l2.3-83.1z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#g)"/>
              <linearGradient id="h" x1="973.8" x2="973.8" y1="292.6" y2="318.1" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#ededed"/>
                <stop offset="1" style="stop-color:#fff;stop-opacity:0"/>
              </linearGradient>
              <path d="M965.7 674.8h43.7l1.4 51H966l-.3-51z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#h)"/>
              <linearGradient id="i" x1="804.7" x2="804.7" y1="317.4" y2="380.2" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#17e9c3"/>
                <stop offset="1" style="stop-color:#17e9c3;stop-opacity:0"/>
              </linearGradient>
              <path d="M639.4 550.6h42l-17.8 125.5h-44.8l20.6-125.5z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#i)"/>
              <linearGradient id="j" x1="771" x2="771" y1="317.4" y2="380.2" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#17e9c3"/>
                <stop offset="1" style="stop-color:#17e9c3;stop-opacity:0"/>
              </linearGradient>
              <path d="M574 550.6h42.1l-22 125.5h-44.8L574 550.6z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#j)"/>
              <linearGradient id="k" x1="739.9" x2="739.9" y1="317.4" y2="404" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#17e9c3"/>
                <stop offset="1" style="stop-color:#0047ff"/>
              </linearGradient>
              <path d="M519.9 503h41.3L525 676.1h-45.2l40.2-173z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#k)"/>
              <linearGradient id="l" x1="837.4" x2="837.4" y1="317.4" y2="357.2" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#17e9c3"/>
                <stop offset="1" style="stop-color:#17e9c3;stop-opacity:0"/>
              </linearGradient>
              <path d="M699 596.6h43.1l-8.6 79.5h-44.8l10.4-79.5z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#l)"/>
              <linearGradient id="m" x1="872.7" x2="872.7" y1="317.4" y2="395.9" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#17e9c3"/>
                <stop offset="1" style="stop-color:#0047ff"/>
              </linearGradient>
              <path d="M773 519.2h41.2l-11.6 157h-44.8l15.1-157z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#m)"/>
              <linearGradient id="n" x1="905.4" x2="905.4" y1="317.4" y2="370.5" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#17e9c3"/>
                <stop offset="1" style="stop-color:#17e9c3;stop-opacity:0"/>
              </linearGradient>
              <path d="M833.6 570H876l-4.3 106H827l6.7-106.2z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#n)"/>
              <linearGradient id="o" x1="939.4" x2="939.4" y1="317.4" y2="359" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#17e9c3"/>
                <stop offset="1" style="stop-color:#17e9c3;stop-opacity:0"/>
              </linearGradient>
              <path d="M899.2 593h43l-.5 83.2h-44.8l2.3-83.1z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#o)"/>
              <linearGradient id="p" x1="973.8" x2="973.8" y1="317.1" y2="342.6" gradientTransform="matrix(2 0 0 -2 -959.3 1311)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#17e9c3"/>
                <stop offset="1" style="stop-color:#17e9c3;stop-opacity:0"/>
              </linearGradient>
              <path d="M965.7 625.8h43.7l1.4 51H966l-.3-51z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#p)"/>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 -.2723 .9622 446 574.1)">May</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 -.2723 .9622 435 613.2)">Apr</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 -.2723 .9622 424 652.3)">Mar</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 -.2723 .9622 412.9 691.4)">Feb</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 -.2723 .9622 401.8 730.5)">Jan</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 0 1 494.2 752.4)">22</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 0 1 562.2 752.4)">23</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 0 1 983.2 752.4)">29</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 0 1 912.2 752.4)">28</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 0 1 842.2 752.4)">27</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 0 1 772.2 752.4)">26</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 0 1 702.2 752.4)">25</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1547px" transform="matrix(.9848 0 0 1 632.2 752.4)">24</text>
            </g>
            <g class="svg__top">
              <path d="M1018.5 1066.4H350.1m668.4-56H370.1m648.4-50H380.1m638.4-50H390.1m628.4-46H400.1" style="fill:none;stroke:#e4e4e4;stroke-miterlimit:10"/>
              <path d="M353.4 1064.9s55.4-10.4 86-21.7c39.6-14.5 74.3-40 125.6-40 51.4 0 75.7 25.9 116 27 31.5 1 89.3-4 141.5-50 50.7-44.7 161.8-45.5 196-34.3v119.6l-665-.6z" style="opacity:.1;fill-rule:evenodd;clip-rule:evenodd;fill:#999;enable-background:new"/>
              <path d="M490.8 1066a833 833 0 0 0 111.5-39.2c56.5-25 115.5-54 203.6-37.2 89.8 17.1 193.2 4 212.6-8.9v85.4H490.8z" style="opacity:.1;fill-rule:evenodd;clip-rule:evenodd;fill:#999;enable-background:new"/>
              <linearGradient id="q" x1="701.1" x2="701.1" y1="-206.2" y2="-117.8" gradientTransform="matrix(2 0 0 -2 -711 615.8)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#fff"/>
                <stop offset="1" style="stop-color:#17e9c3"/>
              </linearGradient>
              <path d="M363.9 1027.3s54.5-14.6 84.6-30.4c39-20.6 73-56.4 123.6-56.4 50.6 0 74.5 36.4 114.2 38.1 31 1.3 88-5.8 139.3-70.5 49.9-62.9 159.3-64 192.9-48.2v168.3l-654.6-.9z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#q)"/>
              <linearGradient id="r" x1="734.9" x2="734.9" y1="-206.6" y2="-146.5" gradientTransform="matrix(2 0 0 -2 -711 615.8)" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#fff;stop-opacity:0"/>
                <stop offset="1" style="stop-color:#0047ff"/>
              </linearGradient>
              <path d="M499 1029a668 668 0 0 0 109.8-55.3c55.7-35 113.8-75.9 200.5-52.3 88.3 24 190.1 5.6 209.2-12.6V1029H499z" style="fill-rule:evenodd;clip-rule:evenodd;fill:url(#r)"/>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1407px" transform="matrix(.9861 0 -.2214 .9752 318.2 1066.7)">0</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1407px" transform="matrix(.9861 0 -.2214 .9752 317.7 1012.2)">200</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1407px" transform="matrix(.9861 0 -.2214 .9752 328.4 963.5)">400</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1407px" transform="matrix(.9861 0 -.2214 .9752 339.6 914.8)">600</text>
              <text style="fill:#b2b2b2;font-family:'Inter-SemiBold';font-size:10.1407px" transform="matrix(.9861 0 -.2214 .9752 350.7 866)">800</text>
              <path d="M404.9 825h1.6l2.1 5.4h.1l2.2-5.4h1.6v7.4h-1.3v-5l-2 5h-1l-2-5v5h-1.3V825zm15.5 3.7a4 4 0 0 1-.4 2 3.1 3.1 0 0 1-3 1.8c-.5 0-1.1-.1-1.6-.5-.5-.3-1-.7-1.2-1.3s-.4-1.2-.4-2 .1-1.5.4-2 .7-1 1.2-1.3a3.3 3.3 0 0 1 3.4 0c.5.3.9.7 1.2 1.3s.4 1.2.4 2zm-1.3 0c0-.6 0-1-.3-1.4a2 2 0 0 0-.7-.9c-.3-.2-.6-.3-1-.3s-.8.1-1 .3a2 2 0 0 0-.8.9l-.2 1.4c0 .6 0 1 .2 1.4l.7 1c.3.2.7.2 1 .2.5 0 .8 0 1.1-.3s.6-.5.7-.9c.2-.4.3-.8.3-1.4zm8.6-3.7v7.4h-1.2l-3.4-5h-.1v5h-1.3V825h1.2l3.4 5v-5h1.4zM523 826.1v-1h5.8v1h-2.3v6.3h-1.3v-6.3h-2.3zm11.5-1.1h1.3v4.8c0 .6-.1 1-.4 1.4-.2.4-.6.7-1 1s-1 .3-1.6.3c-.6 0-1 0-1.5-.3a2 2 0 0 1-1-1c-.3-.4-.4-.8-.4-1.4V825h1.3v4.7c0 .3 0 .6.2.8l.6.6.8.2c.4 0 .6 0 .9-.2l.6-.6.2-.8V825zm2.7 7.4V825h4.7v1.1h-3.4v2h3.2v1.2h-3.2v2h3.5v1.1h-4.8zM643.2 832.4l-2-7.4h1.4l1.3 5.4 1.5-5.4h1.2l1.4 5.4h.1l1.3-5.4h1.4l-2 7.4h-1.3l-1.5-5.2-1.5 5.2h-1.3zm8.5 0V825h4.8v1.1H653v2h3.1v1.2H653v2h3.4v1.1h-4.8zm8.6 0h-2.5V825h2.5c.7 0 1.4.2 1.9.5s1 .7 1.2 1.2.4 1.2.4 2-.1 1.4-.4 2a3 3 0 0 1-1.2 1.3c-.6.3-1.2.4-2 .4zm-1.2-1.1h1.1c.5 0 1-.1 1.3-.3.3-.2.6-.5.7-.9.2-.4.3-.8.3-1.4 0-.6 0-1-.3-1.4-.1-.4-.4-.6-.7-.8s-.8-.3-1.2-.3H659v5zM759.8 826.1v-1h5.8v1h-2.3v6.3H762v-6.3h-2.3zm6.9 6.3V825h1.3v3.1h3.4v-3h1.3v7.3h-1.3v-3.1H768v3.1h-1.3zm12-7.4h1.3v4.8c0 .6-.1 1-.4 1.4-.2.4-.5.7-1 1s-1 .3-1.5.3c-.6 0-1.1 0-1.6-.3-.4-.2-.8-.6-1-1-.3-.4-.4-.8-.4-1.4V825h1.3v4.7c0 .3 0 .6.2.8l.6.6.9.2c.3 0 .6 0 .8-.2l.6-.6.2-.8V825zM878.5 832.4V825h4.6v1.1h-3.3v2h3v1.2h-3v3.1h-1.3zm5.8 0V825h2.8c.5 0 1 .1 1.4.3s.6.5.8.8.3.8.3 1.3 0 .9-.3 1.2a2 2 0 0 1-.9.8c-.3.2-.8.3-1.4.3h-2v-1.1h1.9c.3 0 .6 0 .8-.2l.4-.4.2-.6c0-.3 0-.5-.2-.7a1 1 0 0 0-.5-.4l-.8-.2h-1.2v6.3h-1.3zm3.8-3.3 1.8 3.3h-1.5l-1.8-3.3h1.5zm4-4.1v7.4h-1.3V825h1.4zM1000.8 827a1 1 0 0 0-.4-.7c-.2-.2-.6-.3-1-.3-.2 0-.5 0-.7.2l-.4.3a.8.8 0 0 0 0 1l.2.2.4.2.5.1.6.2c.3 0 .6.1.8.3.3 0 .5.2.7.4.2.1.4.3.5.6l.2.8a2 2 0 0 1-1.3 2l-1.5.2c-.6 0-1 0-1.5-.3a2.2 2.2 0 0 1-1.3-2h1.3l.2.7c.1.2.3.3.6.3a2.2 2.2 0 0 0 1.5 0c.2 0 .3-.2.5-.3l.2-.6-.2-.5-.5-.3a6 6 0 0 0-.7-.2l-.8-.2-1.4-.7c-.4-.3-.5-.8-.5-1.3l.3-1.2 1-.7a3.2 3.2 0 0 1 2.7 0l1 .7c.1.4.3.7.3 1.1h-1.3zm3.4 5.4h-1.4l2.5-7.4h1.7l2.5 7.4h-1.4l-2-5.9-2 5.9zm0-2.9h3.9v1h-3.9v-1zm5.1-3.4v-1h5.8v1h-2.3v6.3h-1.3v-6.3h-2.2z" style="fill:#b2b2b2"/>
            </g>
            <path d="M265.2 460.2h1385.3" style="fill:#b2b2b2;stroke:#b2b2b2;stroke-width:.25;stroke-miterlimit:10"/>
            <g class="svg__top">
              <path d="M1192.3 507.3c-37.8 0-68.4 20.6-68.4 46s30.6 46 68.4 46 68.3-20.6 68.3-46-30.6-46-68.3-46zm0 67.7c-17.8 0-32.1-9.7-32.1-21.7s14.3-21.6 32-21.6c17.8 0 32.2 9.7 32.2 21.6 0 12-14.4 21.7-32.1 21.7z" style="fill:#f4f4f4"/>
              <path d="M1191.9 574.7c-17.7 0-32.1-9.7-32.1-21.6 0-12 14.4-21.6 32.1-21.6 17.7 0 32.1 9.6 32.1 21.6 0 12-14.3 21.6-32.1 21.6z" style="fill:none;stroke:#17e9c3;stroke-miterlimit:10"/>
              <path d="M1191.9 557c-3.2 0-5.8-1.8-5.8-3.9 0-2.1 2.6-3.9 5.8-3.9 3.2 0 5.8 1.8 5.8 3.9 0 2.1-2.6 3.9-5.8 3.9z" style="fill:#eaeaea"/>
              <path d="M1190.9 460.2c-37.7 0-68.3 20.6-68.3 46s30.6 46 68.3 46 68.3-20.6 68.3-46-30.5-46-68.3-46zm0 67.6c-17.7 0-32.1-9.7-32.1-21.6 0-12 14.4-21.6 32.1-21.6 17.7 0 32.1 9.6 32.1 21.6 0 12-14.3 21.6-32.1 21.6z" style="fill:#0dbf9f"/>
              <path d="M1191.5 545.5c37.7 0 68.3-20.6 68.3-46s-30.6-46-68.3-46v24.4c17.7 0 32 9.6 32 21.6 0 12-14.3 21.6-32 21.6v24.4z" style="fill:#17e9c3"/>
              <path d="M1186 511c-.8 0-1.5 0-2-.3-.6-.2-1-.6-1.4-1-.3-.4-.4-.9-.4-1.4h2c0 .4.2.7.5 1 .4.2.8.3 1.3.3.4 0 .8 0 1.1-.2l.8-.7c.2-.2.3-.6.3-.9a1.6 1.6 0 0 0-1-1.6l-1-.2-1 .1a2 2 0 0 0-.9.5l-1.8-.3.9-4.6h6.2v1.3h-4.7l-.4 2.4 1-.5 1.2-.2c.7 0 1.3.1 1.8.4.5.2.9.6 1.2 1 .3.5.4 1 .4 1.7a3 3 0 0 1-.5 1.7c-.4.5-.9.9-1.5 1.1-.6.3-1.3.5-2.1.5zm10.2.1c-.9 0-1.7-.2-2.4-.6a4 4 0 0 1-1.5-1.7 7 7 0 0 1 0-5.2c.3-.6.8-1.2 1.4-1.5.6-.4 1.4-.5 2.2-.5s1.6.1 2.3.5c.6.3 1.1.9 1.5 1.5a6.6 6.6 0 0 1 .3 5.2 4 4 0 0 1-1.4 1.7c-.6.4-1.4.6-2.4.6zm0-1.5c.7 0 1.3-.3 1.6-.9.4-.6.6-1.4.5-2.5a5 5 0 0 0-.3-1.9c-.2-.4-.5-.8-.8-1a2 2 0 0 0-1.2-.4 2 2 0 0 0-1.6.8c-.4.6-.6 1.4-.6 2.5 0 .7.1 1.3.3 1.9.2.5.5.9.9 1.1.3.3.7.4 1.2.4z" style="fill:#0dbf9f"/>
            </g>
            <g class="svg__top">
              <path d="M1192.3 669.3c-37.8 0-68.4 20.6-68.4 46s30.6 46 68.4 46 68.3-20.6 68.3-46-30.6-46-68.3-46zm0 67.7c-17.8 0-32.1-9.7-32.1-21.7s14.3-21.6 32-21.6c17.8 0 32.2 9.7 32.2 21.6 0 12-14.4 21.7-32.1 21.7z" style="fill:#f4f4f4"/>
              <path d="M1191.9 736.7c-17.7 0-32.1-9.7-32.1-21.6 0-12 14.4-21.6 32.1-21.6 17.7 0 32.1 9.6 32.1 21.6 0 12-14.3 21.6-32.1 21.6z" style="fill:none;stroke:#17e9c3;stroke-miterlimit:10"/>
              <path d="M1191.9 719c-3.2 0-5.8-1.8-5.8-3.9 0-2.1 2.6-3.9 5.8-3.9 3.2 0 5.8 1.8 5.8 3.9 0 2.1-2.6 3.9-5.8 3.9z" style="fill:#eaeaea"/>
              <path d="M1191.9 622c-37.7 0-68.3 20.7-68.3 46 0 25.5 30.6 46.1 68.3 46.1s68.3-20.6 68.3-46-30.5-46-68.3-46zm0 67.7c-17.7 0-32.1-9.7-32.1-21.6 0-12 14.4-21.6 32.1-21.6 17.7 0 32.1 9.6 32.1 21.6 0 12-14.3 21.6-32.1 21.6z" style="fill:#0dbf9f"/>
              <path d="M1123.6 661c0 25.5 30.6 46.1 68.3 46.1s68.3-20.6 68.3-46-30.6-46-68.3-46v24.4c17.7 0 32.1 9.6 32.1 21.6 0 12-14.4 21.6-32 21.6-17.8 0-32.2-9.7-32.2-21.6h-36.2z" style="fill:#17e9c3"/>
              <path d="m1183 671.6 5.4-9.3h-5.4l.1-1.6h7.4v1.6l-5.2 9.3h-2.3zm13.3.2c-.8 0-1.5-.1-2.1-.4-.7-.3-1.2-.7-1.5-1.3-.4-.5-.6-1-.6-1.7h2c0 .5.3.9.7 1.2.4.3.9.4 1.4.4.4 0 .8 0 1-.2.4-.2.6-.5.8-.8.2-.4.2-.7.2-1.2a2.2 2.2 0 0 0-1.1-1.8c-.4-.2-.7-.3-1.2-.3-.3 0-.6 0-1 .2a2 2 0 0 0-.7.5l-1.9-.3.5-5.4h6.3v1.5h-4.6l-.2 2.8.9-.6 1.2-.2a3.8 3.8 0 0 1 3.2 1.7c.4.5.6 1.2.6 1.9.1.7 0 1.4-.3 2a4 4 0 0 1-1.4 1.5c-.7.3-1.4.5-2.2.5z" style="fill:#0dbf9f"/>
            </g>
            <path d="M1617.2 447.5c-3.9 0-7.5-2-8.1-4.6-.6-2.5 2-4.6 5.9-4.6s7.5 2 8.1 4.6c.6 2.5-2 4.6-6 4.6zm-24 0c-3.9 0-7.5-2-8.1-4.6-.6-2.5 2-4.6 5.9-4.6s7.5 2 8.1 4.6c.6 2.5-2 4.6-6 4.6zm-24 0c-3.9 0-7.5-2-8.1-4.6-.6-2.5 2-4.6 5.9-4.6s7.5 2 8.1 4.6c.6 2.5-2 4.6-6 4.6z" style="fill:#ededed"/>
            <g class="svg__top">
              <ellipse cx="321.1" cy="533.8" rx="9.6" ry="6.3" style="fill:#b2b2b2" transform="rotate(-18.1 321 533.7)"/>
              <ellipse cx="321.1" cy="533.8" rx="60.5" ry="39.7" style="fill:none;stroke:#cfcfcf;stroke-miterlimit:8" transform="rotate(-18.1 321 533.7)"/>
              <linearGradient id="s" x1="321.1" x2="321.1" y1="492.1" y2="572.1" gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#fff;stop-opacity:0"/>
                <stop offset="1" style="stop-color:#17e9c3"/>
              </linearGradient>
              <path d="M379.8 521.2c.3 4-.2 8.2-1.8 12.6-8 23.3-40 42.2-71.5 42.2-26.8 0-44.5-13.8-44.2-32.2v-43.3l117.6-21.3v42z" style="fill:url(#s)"/>
              <ellipse cx="321.1" cy="489.8" rx="60.5" ry="39.7" style="fill:#17e9c3" transform="rotate(-18.1 321 489.8)"/>
              <path d="M299.8 495.2c2.4-6.7 11.6-12.2 20.7-12.2s14.6 5.5 12.3 12.2" style="fill:#fff"/>
              <ellipse cx="323.3" cy="478.1" rx="6.9" ry="4.5" style="fill:#fff" transform="rotate(-18.1 323.3 478)"/>
            </g>
          </svg>
      </div>
    </section>

    <!DOCTYPE html>
    <html>
    <head>
    <style>
    /* CSS code */
    @media only screen and (max-width: 768px) {
        .logo-slider {
    margin-top: 10px;
  }
}

    .logo-slider {
      margin-top:220px;
      width: 100%;
      height: 70%;
      overflow: hidden;
    }
    
    .logo-slider ul {
      display: flex;
      width: 1600px; /* Double the total width of all logos */
      height: 90px;
      gap: 110px;
      position: relative;
      animation: logo-slider-infinite 11s linear infinite; /* Adjusted animation duration */
      animation-fill-mode: forwards;
      padding: 0;
      margin: 0;
      list-style: none;
      animation-delay: -8s; /* Delay the start to avoid the initial gap */
    }
    
    .logo-slider li {
      width: 100px;
      height: 100px0px;
      flex-shrink: 0; /* Prevent items from shrinking */
    }
    
    .logo-slider li img {
      width: 100%;
      height: 100%;
    }
    
    @keyframes logo-slider-infinite {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(-1100px); /* Move the width of all logos */
      }
    }
    </style>
    </head>
    <body>
 

   


       
    <div class="logo-slider">
        <ul>
             <li> <img src="{{asset('frontend/assets/img/diabos.png')}}"></li>
            <li> <img src="{{asset('frontend/assets/img/nesco.png')}}" alt="" width="180" height="500"></li>
            {{-- <li> <img src={{asset('frontend/assets/img/sunteck.jpg')}}" alt="" width="180" height="500"></li> --}}
            <li> <img src="{{asset('frontend/assets/img/syslab.png')}}" alt="" width="180" height="500"></li>
            <li> <img src="{{asset('frontend/assets/img/portal.jpg')}}" alt="" width="180" height="500"></li>
            <li> <img src="{{asset('frontend/assets/img/r-medical.jpg')}}" alt="" width="180" height="500"></li>
            <li> <img src="{{asset('frontend/assets/img/tripdarwin.png')}}" alt="" width="180" height="500"></li>
            
              <li> <img src="{{asset('frontend/assets/img/student-scoop.png')}}" alt="" width="180" height="500"></li>
               <li> <img src="{{asset('frontend/assets/img/diabos.png')}}" alt="" width="180" height="500"></li>
                <li> <img src="{{asset('frontend/assets/img/nesco.png')}}" alt="" width="180" height="500"></li>
              
            <li> <img src="{{asset('frontend/assets/img/sunteck.jpg')}}" alt="" width="180" height="500"></li>
    
          <li> <img src="{{asset('frontend/assets/img/syslab.png')}}" alt="" width="180" height="500"></li>
          
           <li> <img src="{{asset('frontend/assets/img/portal.jpg')}}" alt="" width="180" height="500"></li>
            <li> <img src={{asset('frontend/assets/img/r-medical.jpg')}}" alt="" width="180" height="500"></li>
            <li> <img src="{{asset('frontend/assets/img/tripdarwin.png')}}" alt="" width="180" height="500"></li>
          </ul>
    </div>
    
    </body>
    </html>
    
    <h5 class="typing" id="typing"></h5>
    <style>
      *,
*:before,
*:after {
  box-sizing: border-box;


}

body,
html {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #fff;
}
@media(max-width:768px){
  .typing {
    margin-top:-337px!important;
   
}
}

.typing {
    margin-top:-190px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: auto;
    color: #0047ff;
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    font-size: 4vw;
}

#typing::after {
    content: '|';
    position: relative;
    right: 0;
    animation: blink 1s step-end infinite;
}

@keyframes blink {
    from, to {
        color: transparent
    }
    50% {
        /* color: yellow; */
    }
}
    </style>
  <script>
  const greeting = ['Welcome To Tech Simians', 'The Best IT Solutions in Mumbai'];
let currentGreetingIndex = 0;
let currentCharacterIndex = 0;
let isDeleting = false;
let isPaused = false;
let pauseEnd = 0;

function typeWriterEffect() {
  const greetingElement = document.getElementById('typing');

  if (isPaused && Date.now() > pauseEnd) {
    isPaused = false;
    if (isDeleting) {
      currentGreetingIndex = (currentGreetingIndex + 1) % greeting.length;
      isDeleting = false;
    } else {
      isDeleting = true;
    }
  }

  if (!isPaused && !isDeleting && currentCharacterIndex === greeting[currentGreetingIndex].length) {
    isPaused = true;
    pauseEnd = Date.now() + 800; 
    return setTimeout(typeWriterEffect, 50);
  }

  if (!isPaused && isDeleting && currentCharacterIndex === 0) {
    isPaused = true;
    pauseEnd = Date.now() + 200; 
    return setTimeout(typeWriterEffect, 50);
  }

  const timeout = isDeleting ? 100 : 200;
  greetingElement.innerText = greeting[currentGreetingIndex].substring(0, currentCharacterIndex);
  currentCharacterIndex = isDeleting ? currentCharacterIndex - 1 : currentCharacterIndex + 1;
  setTimeout(typeWriterEffect, timeout);
}

typeWriterEffect();


  </script>
  <!-- <div class="hero-dark typing">
  <div class="container">
    <div class="box">
      <h1 class="box-label">Modernize test automation with AI to</h1>
      <div class="box-items" id="box-items">
  <h3 class="box-heading" id="type-heading"></h3><span class="typed-cursor">|</span>
  <div class="box-item">
    <span>Release mobile apps faster</span>
  </div>
  <div class="box-item">
    <span>Accelerate authoring</span>
  </div>
  <div class="box-item">
    <span>Build trusted tests</span>
  </div>
  <div class="box-item">
    <span>Stabilize tests</span>
  </div>
  <div class="box-item">
    <span>Scale up quality</span>
  </div>
</div>

    
     
</div> -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
  var boxItems = document.getElementById('box-items');
  boxItems.style.display = 'block';
});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
<script>
  const typedHeading = new Typed('#type-heading', {
  strings: ['Stabilize', 'Release mobile apps faster', 'Accelerate authoring', 'Build trusted tests', 'Stabilize tests', 'Scale up quality'],
  typeSpeed: 80,
  backSpeed: 50,
  startDelay: 1000,
  backDelay: 1000,
  loop: true,
  loopCount: Infinity,
  showCursor: true,
  cursorChar: '|',
});

</script>
<style>
  .typed-cursor {
  opacity: 1;
  animation: blink-caret 0.7s infinite;
}

@keyframes blink-caret {
  from, to {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
}

</style>
    <section class="whoweare">
      <h2 class="heading">Who we are</h2>
      <p class="subheading">
      Our team comprises of skilled professionals who meticulously align each project with the client's specific requirements, ensuring timely delivery, top-notch quality, consistency, and adaptability. Our extensive pool of talented resources further enhances our ability to meet and exceed client expectations.
      </p>
      <div class="whoweare__item">
        <div class="whoweare__animation">
          <div class="whoweare__circle">
            <img src="{{asset('frontend/assets/img/circle.svg')}}" alt="" />
          </div>
            <div class="whoweare__line">
              <img src="{{asset('frontend/assets/img/line-with-right-curve.svg')}}" alt="" />
            </div>
          <div class="whoweare__icon">
            <lottie-player
              id="firstLottie"
              src="https://assets9.lottiefiles.com/packages/lf20_kzmlad7s.json"
              
            ></lottie-player>
          </div>
        </div>
        <div class="whoweare__content">
          <h3 class="whoweare__item-title">
            We understand the pressure of work
          </h3>
          <div class="whoweare__item-text">
            execution under stringent time Conditions. Dont worry we get you
            covered with our assured in time delivery of projects.
          </div>
        </div>
      </div>
      <div class="whoweare__item whoweare__item-right">
        <div class="whoweare__animation">
          <div class="whoweare__circle">
            <img src="{{asset('frontend/assets/img/circle.svg')}}" alt="" />
          </div>
          <div class="whoweare__line">
            <img src="{{asset('frontend/assets/img/line-with-left-curve.svg')}}" alt="" />
          </div>
          <div class="whoweare__icon">
            <lottie-player
              id="secondLottie"
              src="https://assets6.lottiefiles.com/packages/lf20_ndbw9wpl.json"
              
            ></lottie-player>
          </div>
        </div>
        <div class="whoweare__content">
          <h3 class="whoweare__item-title">
              Innovative ideas and  designing,
          </h3>
          <div class="whoweare__item-text">
              catering to your requirements and enhacing them with latest technologies serving best quality.
          </div>
        </div>
      </div>
      <div class="whoweare__item">
        <div class="whoweare__animation">
          <div class="whoweare__circle">
            <img src="{{asset('frontend/assets/img/circle.svg')}}" alt="" />
          </div>
          <div class="whoweare__line">
            <img src="{{asset('frontend/assets/img/line-with-right-curve.svg')}}" alt="" />
          </div>
          <div class="whoweare__icon">
            <lottie-player
              id="thirdLottie"
              src="https://assets1.lottiefiles.com/packages/lf20_0sl0y1f4.json"
              
            ></lottie-player>
          </div>
        </div>
        <div class="whoweare__content">
          <h3 class="whoweare__item-title">
              Our top notch content writing service
          </h3>
          <div class="whoweare__item-text">
              ensures better search engine optimisation
              and satisfied results.
          </div>
        </div>
      </div>
      <div class="whoweare__item whoweare__item-right whoweare__item-last">
        <div class="whoweare__animation">
          <div class="whoweare__circle">
            <img src="{{asset('frontend/assets/img/circle.svg')}}" alt="" />
          </div>

          <div class="whoweare__icon">
            <lottie-player
              id="fourthLottie"
              src="https://assets8.lottiefiles.com/packages/lf20_frcf3wjo.json"
              
            ></lottie-player>
          </div>
        </div>
        <div class="whoweare__content">
          <h3 class="whoweare__item-title">
              Offering best customer support
          </h3>
          <div class="whoweare__item-text">
              after product delivery to ensure smooth
              running of projects. From development to
              hosting to publishing any product we got
              all covered.
          </div>
        </div>
      </div>
    </section>
    <section class="whatwedo">
      <h2 class="heading">What we do</h2>
      <p class="subheading">
     
       With our tagline, 'Smart Sapiens On Duty,' our primary goal is to deliver the utmost satisfaction to our esteemed clients. Our unwavering determination is to revolutionize the perception of IT services by consistently offering top-notch solutions that surpass expectations and elevate industry standards
      
      </p>
      <div class="whatwedo__item">
        <div class="whatwedo__content">
           
          <h3 class="whatwedo__item-title">
            Development
          </h3>
          <div class="whatwedo__item-text">
            <ul>
              <li>Web Applications</li>
              <li>Mobile Applications</li>
              <li>Robotic Process Automation</li>
              <li>Software</li>
              <li>IOT</li>
            </ul>
          </div>
        </div>
        <div class="whatwedo__animation">
          <div class="whatwedo__icon">
            <lottie-player
              id="fifthLottie"
              src="{{asset('frontend/assets/animations/development.json')}}"
              
            ></lottie-player>
          </div>
        </div>
      </div>
      <div class="whatwedo__item">
        <div class="whatwedo__content">
          <h3 class="whatwedo__item-title">
            Designing
          </h3>
          <div class="whatwedo__item-text">
            <ul>
              <li>UI/UX Design</li>
              <li>Graphic Design</li>
              <li>Printables</li>
            </ul>
          </div>
        </div>
        <div class="whatwedo__animation">
          <div class="whatwedo__icon">
            <lottie-player
              id="sixthLottie"
              src="{{('frontend/assets/animations/designing.json')}}"
              
            ></lottie-player>
          </div>
        </div>
      </div>
      <div class="whatwedo__item">
        <div class="whatwedo__content">
          <h3 class="whatwedo__item-title">
            Enterprise Solutions
          </h3>
          <div class="whatwedo__item-text">
            <ul>
              <li>Customer Relationship Management</li>
              <li>Human Resource Management</li>
              <li>Enterprise Resource Planning</li>
              <li>Supply Chain Management</li>
            </ul>
          </div>
        </div>
        <div class="whatwedo__animation">
          <div class="whatwedo__icon">
            <lottie-player
              id="seventhLottie"
              src="{{asset('frontend/assets/animations/enterprise-solutions.json')}}"
              
            ></lottie-player>
          </div>
        </div>
      </div>
      <div class="whatwedo__item">
        <div class="whatwedo__content">
          <h3 class="whatwedo__item-title">
            Cloud Solutions
          </h3>
          <div class="whatwedo__item-text">
            <ul>
              <li>Cloud Computing</li>
              <li>Infrastructure Management</li>
              <li>Cloud Operations</li>
            </ul>
          </div>
        </div>
        <div class="whatwedo__animation">
          <div class="whatwedo__icon">
            <lottie-player
              id="eigthLottie"
              src="{{asset('frontend/assets/animations/cloud-solutions.json')}}"
              
            ></lottie-player>
          </div>
        </div>
      </div>
      <div class="whatwedo__item">
        <div class="whatwedo__content">
          <h3 class="whatwedo__item-title">
            IT Consulting
          </h3>
          <div class="whatwedo__item-text">
            <ul>
              <li>Business Process Consulting</li>
              <li>Digital Marketing</li>
            </ul>
          </div>
        </div>
        <div class="whatwedo__animation">
          <div class="whatwedo__icon">
            <lottie-player
              id="ninthLottie"
              src="{{('frontend/assets/animations/it-consulting.json')}}"
             
            ></lottie-player>
          </div>
        </div>
      </div>
    </section>

    <section class="partners" style="background-color:#fff;">
      <img src="{{asset('frontend/assets/img/partner-logos.png')}}" alt="Partners Logos" />
    </section>

    <section class="whychooseus">
      <h2 class="heading">Why choose us</h2>
      <div class="whychooseus__row">
        <div class="whychooseus__item">
          <div class="whychooseus__icon">
            <img src="{{('frontend/assets/img/customer-support.svg')}}" alt="Customer Support Icon" />
          </div>
          <h3 class="whychooseus__item-title">12x7<br>Customer<br>Support</h3>
          <div class="whychooseus__item-text">
          Expertise and Professionalism: We have a team of highly skilled professionals with extensive expertise in their respective domains. Our experienced workforce is well-versed in the latest technologies and industry best practices, ensuring the delivery of cutting-edge solutions tailored to your specific needs.
          </div>
        </div>
        <div class="whychooseus__item">
          <div class="whychooseus__icon">
            <img src="{{asset('frontend/assets/img/experience.svg')}}" alt="Customer Support Icon" />
          </div>
          <h3 class="whychooseus__item-title">6 Years<br>
              of<br>
              Experience</h3>
          <div class="whychooseus__item-text">
          Client-Centric Approach: At TechSimians, we prioritize our clients' success and satisfaction above all else. Our client-centric approach means that we actively listen to your requirements, understand your business goals, and work collaboratively to provide solutions that align perfectly with your vision. Your success is our primary focus.
          </div>
        </div>
        <div class="whychooseus__item">
          <div class="whychooseus__icon">
            <img src="{{asset('frontend/assets/img/best-prices.svg')}}" alt="Customer Support Icon" />
          </div>
          <h3 class="whychooseus__item-title">Best<br>
              Price</br>
              Assured</h3>
          <div class="whychooseus__item-text">
          Comprehensive Service Portfolio: TechSimians offers a wide range of services, including software development, web design, IT consulting, cloud solutions, and more. Our ability to provide end-to-end solutions allows you to consolidate your requirements under one roof, streamlining the process and ensuring seamless integration between various aspects of your project.
          </div>
        </div>
      </div>
    </section>
    <section class="ourwork">
      <h2 class="heading">Our work</h2>
      <div class="ourwork__subtitle">We create products only on the basis of user experience and only covering the needs of the user.</div>
      <div class="ourwork__scroll-container">
      <div class="ourwork__row">
        <div class="ourwork__item">
          <div class="ourwork__img">
            <img src="{{asset('frontend/assets/img/work-9-1.png')}}" alt="Be Untouchables">
          </div>
          <a href="{{url('our-work-detail-5')}}" class="ourwork__hover-text">View Project</a>
        </div>
        <div class="ourwork__item">
          <div class="ourwork__img">
              <img src="{{asset('frontend/assets/img/work-2-1.png')}}" alt="image">
          </div>
          <a href="{{url('our-work-detail')}}" class="ourwork__hover-text">View Project</a>
        </div>
        <div class="ourwork__item">
          <div class="ourwork__img">
              <img src="{{('frontend/assets/img/work-3-1.png')}}" alt="Be Untouchables">
          </div>
          <a href="{{url('our-work-detail-2')}}" class="ourwork__hover-text">View Project</a>
        </div>
        <div class="ourwork__item">
          <div class="ourwork__img">
              <img src="{{asset('frontend/assets/img/work-8-1.png')}}" alt="Be Untouchables">
          </div>
          <a href="{{url('our-work-detail-3')}}" class="ourwork__hover-text">View Project</a>
        </div>
      </div>
      <div class="ourwork__row ourwork__row--second">
        <div class="ourwork__item">
          <div class="ourwork__img">
              <img src="{{asset('frontend/assets/img/work-8-1.png')}}" alt="Be Untouchables">
          </div>
          <a href="{{url('our-work-detail-3')}}" class="ourwork__hover-text">View Project</a>
        </div>
          <div class="ourwork__item">
            <div class="ourwork__img">
                <img src="{{asset('frontend/assets/img/work-8-1.png')}}" alt="Be Untouchables">
            </div>
            <a href="{{url('our-work-detail')}}" class="ourwork__hover-text">View Project</a>
          </div>
          <div class="ourwork__item">
            <div class="ourwork__img">
                <img src="{{asset('frontend/assets/img/work-6.png')}}" alt="Be Untouchables">
            </div>
            <a href="{{url('our-work-detail-4')}}" class="ourwork__hover-text">View Project</a>
          </div>
          <div class="ourwork__item">
            <div class="ourwork__img">
                <img src="{{asset('frontend/assets/img/work-9-1.png')}}" alt="Be Untouchables">
            </div>
            <a href="{{url('our-work-detail-5')}}" class="ourwork__hover-text">View Project</a>
          </div>
          <div class="ourwork__item">
              <div class="ourwork__img">
                  <img src="{{asset('frontend/assets/img/work-9-1.png')}}" alt="Be Untouchables">
              </div>
              <a href="{{url('our-work-detail')}}" class="ourwork__hover-text">View Project</a>
            </div>
      </div>
      <!-- <div>
    <button class="carousel-prev"><i class="fas fa-angle-left"></i></button>
    <button class="carousel-next"><i class="fas fa-angle-right"></i></button>
     </div> -->

      <br>
      <a href="{{url('our-work')}}" class="button button--white">View all</a> 
    </section> 

    

   


    <!-- <style>
      .ourwork__scroll-container {
  overflow-x: hidden; /* Hide horizontal overflow */
  white-space: nowrap;
  width: 100%; /* Ensure container takes full width */
}

.ourwork__row {
  display: inline-block;
}

.ourwork__item {
  display: inline-block;
  width: 300px; /* Adjust the width of each item */
  margin-right: 20px;
  vertical-align: top; /* Align items at the top */
}

    </style> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
  $(document).ready(function () {
  var slideInterval = 3000;
  var isAnimating = false;

  function slideProjects(direction) {
    if (isAnimating) {
      return;
    }
    isAnimating = true;

    var container = $('.ourwork__row');
    var firstItem = $('.ourwork__item:first-child');

    if (direction === 'next') {
      container.animate(
        {
          marginLeft: -firstItem.outerWidth() + 'px',
        },
        500, // Adjust the slide speed as needed
        function () {
          firstItem.detach().appendTo(container);
          container.css('margin-left', 0);
          isAnimating = false;
        }
      );
    } else if (direction === 'prev') {
      var lastItem = $('.ourwork__item:last-child').detach();
      container.prepend(lastItem);
      container.css('margin-left', -firstItem.outerWidth() + 'px');
      container.animate({ marginLeft: 0 }, 500, function () {
        isAnimating = false;
      });
    }
  }

  $('.carousel-next').click(function () {
    slideProjects('next');
  });

  $('.carousel-prev').click(function () {
    slideProjects('prev');
  });

  setInterval(function () {
    slideProjects('next');
  }, slideInterval);
});

  </script> -->

    <div class="testimonials">
      <!-- Slider main container -->
        <div class="swiper testimonials__row">
          <div class="testimonials__left">
            <div class="testimonials__heading">Testimonials</div>
          <h2 class="testimonials__title">What some of  our clients say about us</h2>
          <div class="testimonial__navigation">
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next"></div>
          </div>
        </div>
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="testimonial__item">
                <div class="testimonial__text">Tech Simians has by far the most astonising team out there! I literally could not be happier that I choose you guys! Your regular updates and superb attention to detail blows me away every time I visit my new site.</div>
                <!-- <div class="testimonial__image">
                  <img src="{{('frontend/assets/img/vishal-makadia.png')}}" alt="Vishal Makadia" />
                </div> -->
                <div class="testimonial__name">Guru Rekha Shri</div>
                <div class="testimonial__designation">Founder, Kalakruti Dance Academy</div>
              </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonial__item">
                    <div class="testimonial__text">Hi, my name is Aditya, and we've been working with Tech Simians for almost five years now, and I think the team is very knowledgeable. More importantly, they would understand your requirement properly and accordingly suggest the right solution for your need. I would highly recommend Tech Simians to any company.</div>
                    <!-- <div class="testimonial__image">
                        <img src="{{('frontend/assets/img/vishal-makadia.png')}}" alt="Vishal Makadia" />
                    </div> -->
                    <div class="testimonial__name">Aditya Darooka</div>
                    <div class="testimonial__designation">Darwin Travel Tech Pvt. Ltd.</div>
                  </div>
            </div>
            <!-- <div class="swiper-slide">
                <div class="testimonial__item">
                    <div class="testimonial__text">By far thedd ddfd best team i’ve ever worked with. The truly understood the look I was going for and completely nailed it! I would highly recommend them as a company, you simply just won’t find any better team!</div>
                    <div class="testimonial__image">
                        <img src="{{('frontend/assets/img/vishal-makadia.png')}}" alt="Vishal Makadia" />
                    </div>
                    <div class="testimonial__name">Vishal Makadia</div>
                    <div class="testimonial__designation">Owner, SKD Constructions</div>
                  </div>
            </div> -->
          </div>
        </div>
    </div>
    <style>
      /* Default styles for all devices *
/* Styles for mobile devices (max-width: 767px) */
@media (max-width: 767px) {
  .testimonial__item {
    margin-top: 560px;
  }
}



    </style>

    
    <!-- <section class="ourblog">
      
      <div class="ourblog__row">
        <div class="accordion--wrapper">
            <h2 class="ourblog__title">our Blog</h2>
          <div class="accordion--trigger accordion--active accordion--trigger-first">
                <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="m3.07 3.93 8.48 8.49 8.49-8.49" stroke="#0047FF" stroke-width="6" stroke-linecap="round"/></svg>
                How To Enhance Motivation
              for Better Business Leads?</div>
          <div class="accordion--content accordion--active">
            <div class="accordion-inner">
                Follow these 7 Neuromarketing ways and measures to create an
                astonishing impact in your upcoming marketing campaign. <a href="{{url('blog')}}">Read now!</a>
            </div>
          </div>
          <div class="accordion--trigger"><svg width="24" height="17"  viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m3.07 3.93 8.48 8.49 8.49-8.49" stroke="#0047FF" stroke-width="6" stroke-linecap="round"/></svg>7 Ways Neuromarketing Impact Marketing Campaign</div>
          <div class="accordion--content">
            <div class="accordion-inner">
                Follow these 7 Neuromarketing ways and measures to create an
                astonishing impact in your upcoming marketing campaign. <a href="{{url('blog')}}">Read now!</a>
            </div>
          </div>
          <div class="accordion--trigger"><svg width="24" height="17"  viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m3.07 3.93 8.48 8.49 8.49-8.49" stroke="#0047FF" stroke-width="6" stroke-linecap="round"/></svg>Can Good Design Grow Your Business And Customers?</div>
          <div class="accordion--content">
            <div class="accordion-inner">
                Follow these 7 Neuromarketing ways and measures to create an
                astonishing impact in your upcoming marketing campaign. <a href="{{url('blog')}}">Read now!</a>
            </div>
        </div>
      </div>

      <div class="ourblog__animation">
          <lottie-player
          id="tenthLottie"
          src=" https://assets2.lottiefiles.com/packages/lf20_nsj9zfuz.json"
         
        ></lottie-player>
         
      </div></div>
    </section> -->

 

<style>
  /* Base styles */
  .ourblog {
    display: flex;
    width: 100%;
  }

  .accordion {
    flex: 1;
    padding-right: 20px;
    box-sizing: border-box;
  }

  .ourblog__animation {
    flex: 1;
  }

  /* Mobile styles */
  @media (max-width: 768px) {
    .ourblog {
      flex-direction: column;
    }

    .accordion {
      padding-right: 0;
    }
  }
  .animation-contaner {
    display: flex;
    flex-direction: column;
    height: 94%;
    width: 94%;
  }
</style>

  <section class="ourblog">
  
    <div class="accordion">
    <h2 class="ourblog__title">our Blog</h2>
      <details>
        <summary>How To Enhance Motivation for Better Business Leads?</summary>
        <div class="accordion--content accordion--active">
          <div class="accordion-inner">
            Follow these 7 Neuromarketing ways and measures to create an astonishing impact in your upcoming marketing campaign. <a href="{{url('blog')}}">Read now!</a>
          </div>
        </div>
      </details>

      <details>
        <summary>7 Ways Neuromarketing Impact Marketing Campaign</summary>
        <div class="accordion--content">
          <div class="accordion-inner">
            Follow these 7 Neuromarketing ways and measures to create an astonishing impact in your upcoming marketing campaign. <a href="{{url('blog')}}">Read now!</a>
          </div>
        </div>
      </details>

      <details>
        <summary>Can Good Design Grow Your Business And Customers?</summary>
        <div class="accordion--content">
          <div class="accordion-inner">
            Follow these 7 Neuromarketing ways and measures to create an astonishing impact in your upcoming marketing campaign. <a href="{{url('blog')}}">Read now!</a>
          </div>
        </div>
      </details>
    </div>

    <div class="ourblog__animation ">
      <lottie-player id="tenthLottie" src="https://assets2.lottiefiles.com/packages/lf20_nsj9zfuz.json"></lottie-player>
    </div>
  </section>



<script>
  var Accordions = (function () {
  "use strict";

  var closeOthers = function (current, parent) {
    var opened = Array.from(parent.querySelectorAll("details[open]"));

    opened.forEach(function (accordion) {
      if (accordion === current) return;
      accordion.removeAttribute("open");
    });
  };

  var toggle = function (event, selector) {
    var parent = event.target.closest(selector);
    if (!parent) return;

    if (!event.target.hasAttribute("open")) return;

    closeOthers(event.target, parent);
  };

  var Constructor = function (selector) {
    var publicAPIs = {};

    var toggleHandler = function (event) {
      toggle(event, selector);
    };

    var openFirst = function (parent) {
      var firstAccordion = parent.querySelector("details");
      if (firstAccordion) {
        firstAccordion.setAttribute("open", true);
      }
    };

    publicAPIs.destroy = function () {
      document.removeEventListener("toggle", toggleHandler, true);
    };

    publicAPIs.init = function () {
      if (!selector || typeof selector !== "string") {
        throw new Error("Please provide a valid selector");
      }

      document.addEventListener("toggle", toggleHandler, true);

      var parent = document.querySelector(selector);
      if (parent) {
        openFirst(parent);
      }
    };

    publicAPIs.init();
    return publicAPIs;
  };

  return Constructor;
})();

var accordion = new Accordions(".accordion");

</script>

<style>
  summary { 
  /* style the cursor to indicate on hover */
  cursor: pointer;
  
  /* style the summary and make it different to details content */
  color: #0069d6;
  font-weight: bold;
  font-size: 24px;
}
summary::-webkit-details-marker { 
  /* You can style the marker in webkit and blink (Chrome, Safari) */
    color: red;
  list-style-image: url(''); /* use alternative icon */
}



</style> 
    <section class="connect">
        <div class="connect__title">Stay ahead of the curve and create a measurable impact on your business.</div>
        <a href="{{url('contact-us')}}" class="button button--white">Connect</a>
    </section>

  </body>
</html>
@include('frontend.layouts.footer')
