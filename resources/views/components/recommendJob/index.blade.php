<section id="recommendJob" class="recommendJob">
    <div class="recommendJobInner">
        <h2 class="content-heading">
            <span class="en"><span>N</span>EW JOBS</span>
            <span class="ja">新着の求人情報</span>
        </h2>
        <div class="recommendJobBox">

            <div id="recommendJobSlide" class="recommendJobSlide swiper-recommendJobSlide">

            </div>

            <button type="button" class="recommendJobButtonPrev">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="52" viewBox="0 0 30 52">
                    <path id="Icon_ionic-ios-arrow-back_l" data-name="Icon ionic-ios-arrow-back_l" d="M20.294,32.187l19.855-19.66a3.676,3.676,0,0,0,0-5.248,3.791,3.791,0,0,0-5.311,0l-22.5,22.276a3.685,3.685,0,0,0-.109,5.124L34.822,57.11a3.8,3.8,0,0,0,5.311,0,3.676,3.676,0,0,0,0-5.248Z" transform="translate(-11.251 -6.194)" fill="#f7f8fc"/>
                </svg>
            </button>
            <button type="button" class="recommendJobButtonNext">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="52" viewBox="0 0 30 52">
                    <path id="Icon_ionic-ios-arrow-back_r" data-name="Icon ionic-ios-arrow-back_r" d="M20.294,32.187l19.855-19.66a3.676,3.676,0,0,0,0-5.248,3.791,3.791,0,0,0-5.311,0l-22.5,22.276a3.685,3.685,0,0,0-.109,5.124L34.822,57.11a3.8,3.8,0,0,0,5.311,0,3.676,3.676,0,0,0,0-5.248Z" transform="translate(41.251 58.194) rotate(180)" fill="#f7f8fc"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<script>
    $(function() {

        searchRecommendJob();

        function searchRecommendJob() {

            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('ajax.recommendJobs') }}",
                data: {},
            })
                .then((...args) => { // done
                    const [data, textStatus, jqXHR] = args;

                    let dataStr = data;

                    let parent = document.getElementById('recommendJobSlide');
                    let div = document.createElement('div');
                    div.className = 'recommendJobList swiper-wrapper';
                    div.innerHTML = dataStr;

                    parent.append(div);
                    $('.recommendJob').show();

                    loadSwiperRecommend();

                })
                .catch((...args) => { // fail
                    const [jqXHR, textStatus, errorThrown] = args;
                });
        }

        function loadSwiperRecommend() {
            let mySwiperRecommend = new Swiper('.swiper-recommendJobSlide', {
                loop: true,
                effect: 'slide',
                speed: 900,
                slidesPerView: 3,
                spaceBetween: 30,
                centeredSlides: false,
                autoplay: {
                    delay: 3000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                    reverseDirection: false
                },
                navigation: {
                    nextEl: '.recommendJobButtonNext',
                    prevEl: '.recommendJobButtonPrev'
                },
                breakpoints: {
                    767: {
                        slidesPerView: 1,
                        centeredSlides: true
                    }
                },
                simulateTouch: false,
                autoResize: true,
                autoHeight: false,
                resizeReInit: true,
                watchOverflow: true
            });
        }
    });
</script>
