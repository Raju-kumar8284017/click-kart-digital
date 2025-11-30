<div class="container py-5 tech-info-container">

    <h2 class="text-center fw-bold mb-5 text-white">Technologies We Work With</h2>

    <!-- TECHNOLOGY ICONS GRID -->
    <div class="row g-4 justify-content-center">

        <!-- Loop of Tech Icons -->
        @php
            $techs = [
                ['id'=>'laravel','name'=>'Laravel','icon'=>'laravel.svg'],
                ['id'=>'react','name'=>'React','icon'=>'react.png'],
                ['id'=>'wordpress','name'=>'WordPress','icon'=>'wordpress.svg'],
                ['id'=>'flutter','name'=>'Flutter','icon'=>'flutter.png'],
                ['id'=>'php','name'=>'PHP','icon'=>'php.svg'],
                ['id'=>'python','name'=>'Python','icon'=>'python.svg'],
                ['id'=>'java','name'=>'Java','icon'=>'java.svg'],
                ['id'=>'aws','name'=>'AWS','icon'=>'aws.svg'],
                ['id'=>'mysql','name'=>'MySQL','icon'=>'mysql.png'],
                ['id'=>'mongo','name'=>'MongoDB','icon'=>'mongo.svg'],
                ['id'=>'figma','name'=>'Figma','icon'=>'figma.svg'],
                ['id'=>'shopify','name'=>'Shopify','icon'=>'shopify.svg'],
                ['id'=>'kotlin','name'=>'Kotlin','icon'=>'kotlin.svg'],
                ['id'=>'swift','name'=>'Swift','icon'=>'swift.svg'],
                ['id'=>'angular','name'=>'Angular','icon'=>'angular.svg'],
                ['id'=>'node','name'=>'Node.js','icon'=>'node.svg'],
                ['id'=>'vue','name'=>'Vue.js','icon'=>'vue.png'],
                ['id'=>'ai','name'=>'AI Tools','icon'=>'ai.png'],
                ['id'=>'devops','name'=>'DevOps','icon'=>'devops.svg'],
            ];
        @endphp

        @foreach($techs as $tech)
        <div class="col-4 col-md-2 text-center">
            <div class="tech-icon" data-bs-toggle="collapse" data-bs-target="#{{ $tech['id'] }}Info">
                <img src="{{ asset('font_dist/img/icons/'.$tech['icon']) }}" class="icon-img">
                <p class="mt-2">{{ $tech['name'] }}</p>
            </div>
        </div>
        @endforeach

    </div>

    <!-- CONTENT SECTIONS – ICON LEFT / TEXT RIGHT -->
    @foreach($techs as $tech)
    <div class="collapse tech-info mt-4" id="{{ $tech['id'] }}Info" data-bs-parent=".tech-info-container">
        <div class="info-box d-flex align-items-start p-3 bg-gradient rounded shadow-sm">
            <img src="{{ asset('font_dist/img/icons/'.$tech['icon']) }}" class="info-icon me-3" style="width:60px;">
            <div>
                <h4>{{ $tech['name'] }} Development</h4>
                <p>
                    @switch($tech['id'])
                        @case('laravel')
                            We build secure, scalable, and high-performance applications using Laravel.
                            @break
                        @case('react')
                            React enables fast, dynamic, and responsive user interfaces for modern web apps.
                            @break
                        @case('wordpress')
                            From custom themes to plugins, WordPress builds powerful, SEO-friendly websites.
                            @break
                        @case('flutter')
                            Flutter creates beautiful mobile apps for Android and iOS with one codebase.
                            @break
                        @case('php')
                            PHP powers backends, CMS systems, portals, and dynamic web applications.
                            @break
                        @case('python')
                            Python helps build AI tools, automation, APIs, data processing, and scalable backends.
                            @break
                        @case('java')
                            Java is ideal for enterprise-grade, secure, and high-performance backend systems.
                            @break
                        @case('aws')
                            AWS provides cloud infrastructure, scalability, and high availability for apps.
                            @break
                        @case('mysql')
                            MySQL is a fast, secure, and reliable relational database for structured data.
                            @break
                        @case('mongo')
                            MongoDB is scalable NoSQL database for real-time and flexible schema applications.
                            @break
                        @case('figma')
                            Figma is used for responsive UI/UX design, prototypes, and modern interfaces.
                            @break
                        @case('shopify')
                            Shopify is used to build high-converting eCommerce stores with custom features.
                            @break
                        @case('kotlin')
                            Kotlin is ideal for modern Android applications with clean and secure code.
                            @break
                        @case('swift')
                            Swift builds premium iOS applications with robust architecture and smooth UI.
                            @break
                        @case('angular')
                            Angular creates enterprise-grade web apps with modular and high-performance components.
                            @break
                        @case('node')
                            Node.js enables scalable real-time backend applications and APIs.
                            @break
                        @case('vue')
                            Vue.js provides lightweight, flexible, and reactive front-end development.
                            @break
                        @case('ai')
                            AI tools include chatbots, ML models, automation, and predictive analytics.
                            @break
                        @case('devops')
                            DevOps uses Docker, Kubernetes, Jenkins, CI/CD pipelines, and cloud automation.
                            @break
                        @default
                            This technology is part of our development stack.
                    @endswitch
                </p>
            </div>
        </div>
    </div>
    @endforeach

</div>


