@extends('daniel.projects.gnlc')

@section('content-submenu')
	<header>
		<h1>Software</h1>
		<p>
			Here we will show how to prepare the development
			environment for the lap counter software
			using Windows; if you use another OS, you can probably
			adapt the steps according to your needs.
			It is required that you know how to code in Java and we recommend
			some knowledge with the Eclipse IDE.
		</p>
		<p>
			Remember that, when you change our source code, you agree that you are
			donating to us all authoring rights of your changes: you cannot claim
			any copyright or intellectual rights over the code or any changes
			you may create.
		</p>
		<p>
			Before continuing, make sure you <a href="/Daniel/Projects/GNLC/Downloads">download</a> all
			required software and they are properly working.
		</p>
	</header>
	<section>
		<h3>About GIT</h3>
		<p>
			GIT is a versioning control very commonly used for software development.
			We use GIT to help the community collaboration during the development
			of our project: if you implement a new function or adapt the software
			to work with new hardware, you can send us back the changes so we
			can merge them in our official release.
		</p>
		<p>
			Anything you need to know on how to clone our repository is here,
			but when you learn more about GIT you can also discover how to use
			an specific version for editing, send BUG fixes and so on.
		</p>
		<p>
			To learn more, check
			<a href="http://en.wikipedia.org/wiki/Git_(software)" target="_blank">Git at Wikipédia</a>
			or <a href="http://www.github.com/" target="_blank">GitHub</a>.
		</p>
	</section>
	<section>
		<h3>Folders Structure</h3>
		<p>
			In our example, we created a folder in <code>C:\gnlc</code> for the project.
			Inside it, we created a subfolder called <code>git</code> and
			another called <code>workspace</code>. The <code>git</code> folder holds
			the project files from the GIT repository, while the <code>workspace</code>
			folder keeps all local data for the Eclipse IDE.
		</p>
	</section>
	<section>
		<h3>Cloning the GIT repository</h3>
		<p>
			Run the "Git Bash" program and execute the commands below. All comments
			(following the # symbol) are ignored and you do not need to type them.
			<code><pre>
cd /c        # go to C:\
mkdir gnlc   # create the folder C:\gnlc
cd gnln      # go to folder C:\gnlc
# the command below will clone the repository into C:\gnlc\git
git clone https://github.com/geralnet/gnlc.git git

# to list all contents of the git folder, use the ls command
ls git
			</pre></code>
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'100x75', '/images/daniel/projects/GNLC/software/', [
				['git-cloning', 'Command sequence to clone the GIT repository.', '677x393'],
		]) !!}
	</section>
	<section>
		<h3>Configuring the Eclipse IDE</h3>
		<p>
			Run Eclipse and follow the steps:
		</p>
		<ol>
			<li>Workspace: <code>C:\gnlc\workspace</code></li>
			<li>Go to Workbench</li>
			<li>Choose "File <b>&rarr;</b> Import"</li>
			<li>Choose "Existing Project into Workspace"</li>
			<li>At "Select Root Directory", type <code>C:\gnlc\git\project</code></li>
			<li>You can ignore any messages related to GIT</li>
			<li>Suggestion: change "Package Presentation" to "Hierarchical"</li>
			<li>Open the file "GNLC <b>&rarr;</b> src <b>&rarr;</b> net.geral.slotcar.lapcounter <b>&rarr;</b> LapCounter.java" and then choose "Run <b>&rarr;</b> Run"</li>
			<li>The slot car lap counter software should run, now you can code your ideas and test them easily!</li>
		</ol>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/software/', [
				['01-workspace', 'Workspace: <code>C:\gnlc\workspace</code>', '630x291'],
				['02-workbench', 'Go to Workbench', '1015x624'],
				['03-file-import', 'Choose "File <b>&rarr;</b> Import"', '1015x624'],
				['04-existing-project', 'Choose "Existing Project into Workspace"', '525x550'],
				['05-import-git-project', 'At "Select Root Directory", type <code>C:\gnlc\git\project</code>', '525x620'],
				['06-alerts', 'Ignore any messages related to GIT', '600x450'],
				['07-package-hierarchical', 'Suggestion: change "Package Presentation" to "Hierarchical"', '1280x800'],
				['08-run', 'Open the file "GNLC <b>&rarr;</b> src <b>&rarr;</b> net.geral.slotcar.lapcounter <b>&rarr;</b> LapCounter.java" and then choose "Run <b>&rarr;</b> Run"', '1280x760'],
				['09-done', 'The slot car lap counter software should run, now you can code your ideas and test them easily!', '1280x760'],
		]) !!}
		<p>
			After implementing you big ideas, please send us back some
			images or post back the source code into the repository.
		</p>			
	</section>
@endsection
