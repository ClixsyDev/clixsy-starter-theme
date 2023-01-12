<?php
function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged)) $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo "<nav class='relative z-0 inline-flex rounded-md shadow-sm -space-x-px' aria-label='Pagination'>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)  echo "<a href='" . get_pagenum_link($paged - 1) . "' class='relative min-h-[45px] min-w-[45px] inline-flex items-center justify-center px-2 py-2 border border-gray-300 bg-white text-sm font-semibold text-black hover:bg-gray-50'>
        <span class='sr-only'>Previous</span>
        <svg class='h-5 w-5' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' aria-hidden='true'>
          <path fill-rule='evenodd' d='M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z' clip-rule='evenodd' />
        </svg>
      </a>";

        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link($paged - $range - 1) . "' class='relative min-h-[45px] min-w-[45px] inline-flex items-center justify-center px-2 py-2 border border-gray-300 bg-white text-sm font-semibold text-black hover:bg-gray-50'>
        <span class='sr-only'>Previous</span>
        ...
      </a>";
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i)
                    ? "<a href='#' aria-current='page' class='z-10 min-h-[45px] min-w-[45px] bg-accent border-indigo-500 text-white relative inline-flex items-center px-4 py-2 border text-lg font-semibold'> " . $i . " </a>"
                    : "<a href='" . get_pagenum_link($i) . "' class='bg-white min-h-[45px] min-w-[45px] border-gray-300 text-black hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-semibold'>" . $i . "</a>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo " <a href='" . get_pagenum_link($paged + $range + 1) . "' class='relative min-h-[45px] min-w-[45px] inline-flex items-center justify-center px-2 py-2 border border-gray-300 bg-white text-sm font-semibold text-black hover:bg-gray-50'>
        <span class='sr-only'>Next</span>
        ...
      </a>";
      if ($paged < $pages && $showitems < $pages) echo " <a href='" . get_pagenum_link($paged + 1) . "' class='relative min-h-[45px] min-w-[45px] inline-flex items-center justify-center px-2 py-2 border border-gray-300 bg-white text-sm font-semibold text-black hover:bg-gray-50'>
        <span class='sr-only'>Next</span>
        <!-- Heroicon name: solid/chevron-right -->
        <svg class='h-5 w-5' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' aria-hidden='true'>
          <path fill-rule='evenodd' d='M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z' clip-rule='evenodd' />
        </svg>
      </a>";
        echo "</div>\n";
    }
}
