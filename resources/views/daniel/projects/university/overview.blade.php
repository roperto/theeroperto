@extends('daniel.projects.university')

@section('content-submenu')
    <header class="jumbotron">
        <h1>{{$project->getTitle()}}</h1>
        <i>{{$project->getSummary()}}</i><br/>
    </header>
    <section>
        <h2>Tank Wars</h2>
        <p>
            Tank Wars was developed in C for the <i>Programming Language I</i> course of my bachelors degree at
            <abbr title="Faculdades Associadas de São Paulo">FASP</abbr>:
        </p>
        <ul>
            <li>Directly write to the video memory to render the graphics.</li>
            <li>Each player (up to 6) controls a tank.</li>
            <li>On each turn the player must choose a weapon before shooting, each weapon has a different cost.</li>
            <li>Before shooting the player must select the appropriate fire power and shooting angle.</li>
            <li>Some weapons are affected by wind while others are not.</li>
            <li>The terrain is modified by the blasts or explosions.</li>
        </ul>
        {!! PhotoSwipeHelper::generatePictures(
            '100x75', 'images/daniel/projects/University/', [
                ['tankwars-01', 'Enter player\'s names.', '642x301'],
                ['tankwars-02', 'Green misses yellow.', '640x480'],
                ['tankwars-03', 'Purple shooting at green.', '640x480'],
                ['tankwars-04', 'Preparing to shoot.', '640x480'],
                ['tankwars-05', 'Red hits green.', '640x480'],
        ]) !!}
    </section>
    <section>
        <h2>Shaders Programming</h2>
        <p>
            Those images were created using <strong>C# XNA</strong> and
            <strong>shaders</strong> running on the <strong>GPU</strong>, as part of the
            <i>Game Programming</i> course of my masters degree at
            <abbr title="University of Technology Sydney">UTS</abbr>.
        </p>
        <p>
            The shaders were used to dynamically render light projection and
            shadows from one or more light sources.
        </p>
        {!! PhotoSwipeHelper::generatePictures(
            '100x75', 'images/daniel/projects/University/', [
                ['shaders-01', 'Headlights projected on irregular terrain.', '816x636'],
                ['shaders-02', 'Red, green and blue lights from different sources.', '800x600'],
                ['shaders-03', 'Shadow casted from different lights sources.', '800x600'],
        ]) !!}

        <h2>OpenGL Terrain and Pattern Generator</h2>
        <p>
            Those images were created using <strong>OpenGL</strong> as part of
            the <i>Computer Graphics</i> course of my masters degree at
            <abbr title="University of Technology Sydney">UTS</abbr>.
        </p>
        <p>
            The terrain is 3D (can be rotated).
            The images are randomly generated and can produce different results
            of the same pattern if different random seeds are provided.
        </p>
        {!! PhotoSwipeHelper::generatePictures(
            '100x75', 'images/daniel/projects/University/', [
                ['opengl-01', 'Dynamically generated terrain and rendered using different colors for different altitudes.', '616x636'],
                ['opengl-02', 'A wireframe version of the coloring pattern.', '616x636'],
                ['opengl-03', 'A random pattern generated using similar techniques.', '616x636'],
        ]) !!}

        <h2>3D Rigging and Animation</h2>
        <p>
            The rendered images were created using <strong>Maya</strong> as part of
            the <i>Advanced 3D Computer Animation</i> course of my masters degree at
            <abbr title="University of Technology Sydney">UTS</abbr>.
        </p>
        {!! PhotoSwipeHelper::generatePictures(
            '100x75', 'images/daniel/projects/University/', [
                ['maya-00', 'Model user for character rigging.', '2019x1704'],
                ['maya-01', 'Drumkit model.', '1536x1152'],
                ['maya-02', 'Amane and drumkit together.', '768x576'],
        ]) !!}
        <p>
            The following video was made as an assignment for the same course.
        </p>
        <figure class="youtube-video">
            <iframe width="420" height="315" src="//www.youtube.com/embed/JYe5bXTOrGA" frameborder="0"
                    allowfullscreen></iframe>
            <figcaption>
                Maya 3D animation - Amane playing drums.
            </figcaption>
        </figure>

        <h2>Ray Tracing</h2>
        <p>
            The following images were rendered from my own ray tracer software,
            developed in C++ as part of
            the <i>Advanced Image Synthesis Techniques</i> course of my masters degree at
            <abbr title="University of Technology Sydney">UTS</abbr>.
        </p>
        {!! PhotoSwipeHelper::generatePictures(
            '100x75', 'images/daniel/projects/University/', [
                ['raytracing-01', 'Ambient occlusion demonstration.', '400x400'],
                ['raytracing-02', 'DNA spheres with ambient occlusion, direct and specular lighting.', '400x800'],
                ['raytracing-03', 'Reflective surfaces (mirrors) demonstration.', '600x400'],
                ['raytracing-04', 'My character rigged in Maya rendered only with ambient occlusion.', '600x600'],
        ]) !!}

        <h2>Green Kangaroo - iPhone Game</h2>
        <p>
            As part of the <i>Mobile Game Development</i>
            course of my masters degree at
            <abbr title="University of Technology Sydney">UTS</abbr> we developed
            a few game prototypes and Green Kangaroo was later published at the Apple Store.
        </p>
        <figure class="youtube-video">
            <iframe width="560" height="315" src="//www.youtube.com/embed/gyK_QBBpN-A" frameborder="0" allowfullscreen></iframe>
            <figcaption>
                Green Kangaroo Game
            </figcaption>
        </figure>

        <h2>Sounds from Heaven - Research Project</h2>
        <p>
            This prototype was used as part of my masters research project
            <i>Drum Tutoring Software: Finding approaches to improve the learning experience.</i>.
        </p>
        <figure class="youtube-video">
            <iframe width="420" height="315" src="//www.youtube.com/embed/8rkUrEWMFMc" frameborder="0" allowfullscreen></iframe>
            <figcaption>
                Sounds from Heaven Prototype
            </figcaption>
        </figure>
    </section>
@endsection
