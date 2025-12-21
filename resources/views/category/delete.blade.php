<form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')

    <button type="submit"
            class="px-5 py-2 bg-blue-600 text-black font-semibold rounded-lg shadow hover:bg-blue-700 transition duration-300"
            onclick="return confirm('Are you sure you want to delete this category?')">
        delete
    </button>
</form>

                                    