
<section>
    <div class="container1">
        <form class="forms" method="POST" action="submit.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Course title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="title"  placeholder="Enter course title..."  >
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Course subtitle</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="subtitle"  placeholder="Enter course subtitle...">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Course description</label>
                <div class="icons">
                    <span class="material-symbols-outlined">
                        list
                    </span>
                    <span class="material-symbols-outlined">
                        format_bold
                    </span>
                </div>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover photo</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                        </svg>
                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                            <label for="image" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span>Upload a file</span>
                            </label>
                            <p class="pl-1">or drag and drop</p>
                            <p class="pl-1">PNG, JPG, GIF up to 10MB</p>
                        </div>
                        <input id="file-upload"  name="image" type="file" class="sr-only">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Promotional video</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                        <span class="material-symbols-outlined vid">
                            play_circle
                        </span>
                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                            <label for="video-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span>Upload a file</span>
                            </label>
                            <p class="pl-1">or drag and drop</p>
                            <p class="pl-1">Vid up to 500mo</p>
                        </div>
                        <input id="video-upload" name="video-upload" type="file" >
                    </div>
                </div>
            </div>
            <label for="course_category">Choose a course category:</label>
            <select class="form-select" name="course_category" id="course_category" aria-label="Default select example">
                <option value="programming">Programming</option>
                <option value="design">Design</option>
                <option value="business">Business</option>
                <option value="marketing">Marketing</option>
                <option value="finance">Finance</option>
                <option value="language">Language</option>
                <option value="music">Music</option>
                <option value="photography">Photography</option>
                <option value="health">Health & Fitness</option>
                <option value="cooking">Cooking</option>
                <option value="art">Art & Creativity</option>
            </select>
            <div class="price">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Pricing</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="pricing" placeholder="Enter your price..." >
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="free" id="flexSwitchCheckDefault" >
                    <label class="form-check-label" for="flexSwitchCheckDefault">Free</label>
                </div>
            </div>
       
            <input type="hidden" name="submitted" value="true">
            <button type="submit" class="btn btn-primary but" name="submit1">Submit</button>
        </form>
    </div>
</section>
