

<section style="flex-direction: column; gap: 10%">

    <div class="container3">
        <form id="parentForm" action="submit.php" method="POST">
            <div class="container2">
            <div class="modal fade"  id="curriculumItemModal" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="curriculumItemModalLabel">Upload Curriculum Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form method="POST" action="submit.php" id="childform2" enctype="multipart/form-data" >
          <div class="mb-3">
            <label for="curriculumItemType" class="form-label">Select Curriculum Item Type:</label>
            <select class="form-select" id="curriculumItemType">
              <option value="pdf">PDF</option>
              <option value="article">Article</option>
              <option value="quiz">Quiz</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="curriculumItemFile" class="form-label">Choose File:</label>
            <input class="form-control" name="uploadFile-quizz" type="file" id="curriculumItemFile" >
          </div>
          <button type="button" id="buttonUpload2" class="btn btn-primary">Upload</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="uploadModal" tabindex="100000000000000000000" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form id="childForm" method="POST" action="submit.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" class="form-control" id="videoFile" name="videoFile" >
                    </div>
                    <button type="button" id="buttonUpload" class="btn btn-primary" style="background-color: #5856D6;">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>
            <input type="text" class="cours-title" name="title-chaptre" placeholder="cours-title..."  class="barcelona">
            <div class="lecture">
                <input type="text" name="title-video" placeholder="Lecture 1: Introduction....">
                <button type="button" id="openUploadModalBtn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
     +content
</button>
            </div>
            <button type="button" id="openCurriculumItemModalBtn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#curriculumItemModal">
    +Curriculum
</button>
            </div>
       
            
            <button type="submit"  class="btn btn-primary but" id="submitich" name="submit">Submit</button>
           
            </form>
        </div>
    <button class="btn btn-primary" id="addSectionButton">+ Section</button>
   
    
</section>
